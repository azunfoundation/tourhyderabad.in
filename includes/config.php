<?php
/**
 * TourHyderabad.in - Global Configuration
 * Production-ready settings for Hostinger Shared Hosting
 */

// Prevent direct script execution if needed
if (!defined('TOURHYDERABAD_APP')) {
    define('TOURHYDERABAD_APP', true);
}

// Business & Contact Details
define('SITE_NAME', 'TourHyderabad.in');
define('SITE_TAGLINE', 'Local Experts, Custom Itineraries');
define('SITE_PHONE', '+91 96529 72699');
define('SITE_PHONE_RAW', '+919652972699');
define('SITE_WHATSAPP', '919652972699');
define('SITE_EMAIL', 'contact@tourhyderabad.in');
define('SITE_HOURS', '9 AM – 9 PM, all days');
define('SITE_LOCATION', 'Hyderabad, Telangana, India');

// Database Configuration for Hostinger MySQL
// Update these with your Hostinger cPanel / hPanel MySQL database credentials when created
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: '');
define('DB_USER', getenv('DB_USER') ?: '');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_CHARSET', 'utf8mb4');

// Dynamic Base URL Detection (works locally, in subdirectories, and on production)
function get_base_url(): string {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    
    // Determine script directory relative to document root
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = dirname($scriptName);
    $dir = ($dir === '/' || $dir === '\\') ? '' : rtrim(str_replace('\\', '/', $dir), '/');
    
    // If running in includes or api, trim up
    $dir = preg_replace('/(\/includes|\/api)$/', '', $dir);

    return $protocol . $host . $dir;
}

// WhatsApp URL generator
function get_whatsapp_url(string $customMessage = ''): string {
    $defaultMsg = "Hi! I want to plan a Hyderabad trip. Please share package details.";
    $msg = !empty($customMessage) ? $customMessage : $defaultMsg;
    return 'https://wa.me/' . SITE_WHATSAPP . '?text=' . rawurlencode($msg);
}

// Clean page link generator
function page_url(string $page): string {
    return $page;
}
