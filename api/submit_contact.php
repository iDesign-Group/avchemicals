<?php
/**
 * API: Submit Contact Form
 * Handles AJAX form POST, validates, sends email, logs to CSV.
 * 
 * Usage:
 *   POST /avchemicals/api/submit_contact.php
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method not allowed. Use POST.'
    ]);
    exit;
}

// Only accept AJAX requests
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    http_response_code(403);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request.'
    ]);
    exit;
}

// Include mailer
require_once __DIR__ . '/../includes/mailer.php';

// Collect and sanitise input
$data = [
    'name'             => htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'company'          => htmlspecialchars(trim($_POST['company'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'email'            => filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL),
    'phone'            => htmlspecialchars(trim($_POST['phone'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'product_interest' => htmlspecialchars(trim($_POST['product_interest'] ?? ''), ENT_QUOTES, 'UTF-8'),
    'message'          => htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8'),
];

// Validation
$errors = [];

// Name: required
if (empty($data['name'])) {
    $errors[] = 'Name is required.';
}

// Email: required, valid format
if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

// Phone: required, at least 10 digits
$phoneClean = preg_replace('/[^0-9]/', '', $data['phone']);
if (strlen($phoneClean) < 10) {
    $errors[] = 'Please provide a valid 10-digit phone number.';
}

// Message: required, min 20 characters
if (strlen($data['message']) < 20) {
    $errors[] = 'Message must be at least 20 characters long.';
}

// Return errors if any
if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// Rate limiting (simple: 1 submission per 30 seconds per IP)
$rateLimitFile = sys_get_temp_dir() . '/avc_rate_' . md5($_SERVER['REMOTE_ADDR'] ?? '');
if (file_exists($rateLimitFile) && (time() - filemtime($rateLimitFile)) < 30) {
    http_response_code(429);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please wait before submitting again.'
    ]);
    exit;
}
touch($rateLimitFile);

// Log to CSV (always succeeds as backup)
logContactSubmission($data);

// Send email
$emailSent = sendContactEmail($data);

if ($emailSent) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for your enquiry! We will get back to you within 24 hours.'
    ]);
} else {
    // Email failed but submission logged
    echo json_encode([
        'status' => 'success',
        'message' => 'Your enquiry has been received. Our team will contact you shortly.'
    ]);
}
