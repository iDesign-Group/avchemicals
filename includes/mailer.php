<?php
/**
 * Mailer — A.V. Chemical
 * Sends email notifications for contact form submissions.
 */

function sendContactEmail($data) {
    $to = 'info@avchemicals.com'; // Change to actual email
    $subject = 'New Enquiry from ' . $data['name'] . ' — AV Chemical Website';

    $body = "New contact form submission received:\n\n";
    $body .= "Name: " . $data['name'] . "\n";
    $body .= "Company: " . $data['company'] . "\n";
    $body .= "Email: " . $data['email'] . "\n";
    $body .= "Phone: " . $data['phone'] . "\n";
    $body .= "Product Interest: " . $data['product_interest'] . "\n";
    $body .= "Message:\n" . $data['message'] . "\n\n";
    $body .= "---\n";
    $body .= "Submitted on: " . date('d-M-Y H:i:s') . "\n";
    $body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";

    $headers = "From: noreply@avchemicals.com\r\n";
    $headers .= "Reply-To: " . $data['email'] . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    return @mail($to, $subject, $body, $headers);
}

/**
 * Log contact submission to CSV
 */
function logContactSubmission($data) {
    $logFile = __DIR__ . '/../contact_log.csv';
    $isNew = !file_exists($logFile);

    $fp = fopen($logFile, 'a');
    if ($fp === false) return false;

    if ($isNew) {
        fputcsv($fp, ['Date', 'Name', 'Company', 'Email', 'Phone', 'Product Interest', 'Message', 'IP']);
    }

    fputcsv($fp, [
        date('Y-m-d H:i:s'),
        $data['name'],
        $data['company'],
        $data['email'],
        $data['phone'],
        $data['product_interest'],
        $data['message'],
        $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
    ]);

    fclose($fp);
    return true;
}
