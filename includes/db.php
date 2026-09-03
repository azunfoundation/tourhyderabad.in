<?php
/**
 * TourHyderabad.in - Database & Lead Storage Handler
 * Production-ready with automatic MySQL table initialization and safe JSON fallback.
 */

require_once __DIR__ . '/config.php';

class DB {
    private static ?PDO $pdo = null;
    private static bool $mysqlAvailable = false;

    public static function getConnection(): ?PDO {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        if (empty(DB_NAME) || empty(DB_USER)) {
            return null;
        }

        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_TIMEOUT => 3,
            ];
            self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
            self::$mysqlAvailable = true;
            self::initTable();
            return self::$pdo;
        } catch (PDOException $e) {
            error_log("Database connection error: " . $e->getMessage());
            self::$pdo = null;
            self::$mysqlAvailable = false;
            return null;
        }
    }

    private static function initTable(): void {
        if (!self::$pdo) return;
        try {
            $sql = "CREATE TABLE IF NOT EXISTS enquiries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(150) NOT NULL,
                phone VARCHAR(30) NOT NULL,
                travel_date VARCHAR(50) DEFAULT NULL,
                package_name VARCHAR(150) DEFAULT NULL,
                travellers VARCHAR(50) DEFAULT NULL,
                message TEXT DEFAULT NULL,
                ip_address VARCHAR(45) DEFAULT NULL,
                user_agent VARCHAR(255) DEFAULT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
            self::$pdo->exec($sql);
        } catch (PDOException $e) {
            error_log("Table initialization error: " . $e->getMessage());
        }
    }

    public static function saveEnquiry(array $data): bool {
        $pdo = self::getConnection();

        $name = trim($data['name'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $travelDate = trim($data['travel_date'] ?? '');
        $packageName = trim($data['package_name'] ?? '');
        $travellers = trim($data['travellers'] ?? '');
        $message = trim($data['message'] ?? '');
        $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
        $userAgent = substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255);

        if (empty($name)) {
            return false;
        }

        // Try MySQL first
        if ($pdo) {
            try {
                $stmt = $pdo->prepare("INSERT INTO enquiries (name, phone, travel_date, package_name, travellers, message, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                return $stmt->execute([$name, $phone, $travelDate, $packageName, $travellers, $message, $ip, $userAgent]);
            } catch (PDOException $e) {
                error_log("Failed to insert enquiry in MySQL: " . $e->getMessage());
                // Fall through to fallback JSON storage
            }
        }

        // Safe JSON fallback file in data/ directory
        $dataDir = dirname(__DIR__) . '/data';
        if (!is_dir($dataDir)) {
            @mkdir($dataDir, 0755, true);
        }

        // Protect data dir with .htaccess
        $htaccess = $dataDir . '/.htaccess';
        if (!file_exists($htaccess)) {
            @file_put_contents($htaccess, "Require all denied\nDeny from all\n");
        }

        $file = $dataDir . '/leads.json';
        $lead = [
            'id' => time() . '-' . rand(100, 999),
            'name' => $name,
            'phone' => $phone,
            'travel_date' => $travelDate,
            'package_name' => $packageName,
            'travellers' => $travellers,
            'message' => $message,
            'ip' => $ip,
            'user_agent' => $userAgent,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $current = [];
        if (file_exists($file)) {
            $raw = @file_get_contents($file);
            $current = json_decode($raw, true) ?: [];
        }

        $current[] = $lead;
        return (bool)@file_put_contents($file, json_encode($current, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);
    }
}
