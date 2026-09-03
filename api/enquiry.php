<?php
/**
 * TourHyderabad.in - Enquiry API Endpoint
 * Production-ready lead processor for Hostinger Shared Hosting
 */

header('Content-Type: application/json; charset=utf-8');

require_once dirname(__DIR__) . '/includes/config.php';
require_once dirname(__DIR__) . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

// Parse request data (handles both JSON and form POST)
$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);
if (!$data && !empty($_POST)) {
    $data = $_POST;
}

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'No data provided']);
    exit;
}

$name = htmlspecialchars(strip_tags(trim($data['name'] ?? '')), ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars(strip_tags(trim($data['phone'] ?? '')), ENT_QUOTES, 'UTF-8');
$travelDate = htmlspecialchars(strip_tags(trim($data['travel_date'] ?? '')), ENT_QUOTES, 'UTF-8');
$packageName = htmlspecialchars(strip_tags(trim($data['package_name'] ?? '')), ENT_QUOTES, 'UTF-8');
$travellers = htmlspecialchars(strip_tags(trim($data['travellers'] ?? '')), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(strip_tags(trim($data['message'] ?? '')), ENT_QUOTES, 'UTF-8');

if (empty($name)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Name is required']);
    exit;
}

$leadData = [
    'name' => $name,
    'phone' => $phone,
    'travel_date' => $travelDate,
    'package_name' => $packageName,
    'travellers' => $travellers,
    'message' => $message,
];

// Save lead to MySQL or secure JSON storage
$saved = DB::saveEnquiry($leadData);

// Format WhatsApp text
$text = "Hi! I'm " . $name . (!empty($phone) ? " (" . $phone . ")" : "") . ".\n";
if (!empty($packageName)) {
    $text .= "Package: " . $packageName . "\n";
}
if (!empty($travellers)) {
    $text .= "Travellers: " . $travellers . "\n";
}
if (!empty($travelDate)) {
    $text .= "Travel date: " . $travelDate . "\n";
}
if (!empty($message)) {
    $text .= "Notes: " . $message . "\n";
}
$text .= "Please share details and pricing.";

$waUrl = 'https://wa.me/' . SITE_WHATSAPP . '?text=' . rawurlencode($text);

// Optional email alert if mail server is enabled
if (!empty(SITE_EMAIL) && filter_var(SITE_EMAIL, FILTER_VALIDATE_EMAIL)) {
    $subject = "New Hyderabad Tour Enquiry: " . $name;
    $body = "New inquiry received on " . SITE_NAME . ":\n\n" .
            "Name: " . $name . "\n" .
            "Phone: " . $phone . "\n" .
            "Package: " . $packageName . "\n" .
            "Travel Date: " . $travelDate . "\n" .
            "Travellers: " . $travellers . "\n" .
            "Message: " . $message . "\n" .
            "Date/Time: " . date('Y-m-d H:i:s') . "\n";
    $headers = "From: no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'tourhyderabad.in') . "\r\n" .
               "Reply-To: " . SITE_EMAIL . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    @mail(SITE_EMAIL, $subject, $body, $headers);
}

echo json_encode([
    'success' => true,
    'saved' => $saved,
    'wa_url' => $waUrl
]);
exit;
