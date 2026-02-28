<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode(['success'=>false,'message'=>'Invalid request method.']); exit;
}

$name     = htmlspecialchars(trim($_POST['name'] ?? ''));
$company  = htmlspecialchars(trim($_POST['company'] ?? ''));
$email    = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone    = htmlspecialchars(trim($_POST['phone'] ?? ''));
$interest = htmlspecialchars(trim($_POST['interest'] ?? ''));
$product  = htmlspecialchars(trim($_POST['product_enquiry'] ?? ''));
$message  = htmlspecialchars(trim($_POST['message'] ?? ''));

if(empty($name)||empty($email)||empty($phone)||empty($message)){
    echo json_encode(['success'=>false,'message'=>'Please fill in all required fields.']); exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo json_encode(['success'=>false,'message'=>'Please enter a valid email address.']); exit;
}

$to      = 'info@avchemicals.in';
$subject = "New Website Enquiry - {$name} | AV Chemicals";
$headers = "From: noreply@avchemicals.in\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$body = "
<html><body style='font-family:Arial,sans-serif;color:#333'>
<div style='max-width:600px;margin:0 auto;border:1px solid #e0e0e0;border-radius:8px;overflow:hidden'>
  <div style='background:#1B5E20;padding:24px;text-align:center'>
    <h2 style='color:#C9A84C;margin:0'>AV Chemicals &mdash; New Website Enquiry</h2>
  </div>
  <div style='padding:32px'>
    <table style='width:100%;border-collapse:collapse'>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600;width:160px'>Name</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'>{$name}</td></tr>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600'>Company</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'>{$company}</td></tr>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600'>Email</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'><a href='mailto:{$email}'>{$email}</a></td></tr>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600'>Phone</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'>{$phone}</td></tr>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600'>Interest</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'>{$interest}</td></tr>
      <tr><td style='padding:10px 0;border-bottom:1px solid #f0f0f0;font-weight:600'>Product/Req</td><td style='padding:10px 0;border-bottom:1px solid #f0f0f0'>{$product}</td></tr>
      <tr><td style='padding:10px 0;font-weight:600;vertical-align:top'>Message</td><td style='padding:10px 0'>{$message}</td></tr>
    </table>
  </div>
  <div style='background:#f9f7f2;padding:14px;text-align:center;font-size:12px;color:#999'>
    Sent from avchemicals.in &mdash; Designed by <a href='https://www.idesigngroup.co.in' style='color:#2E7D32'>iDesign</a>
  </div>
</div>
</body></html>";

mail($to, $subject, $body, $headers);

$ref = 'AVC-'.date('Ymd').'-'.rand(1000,9999);
$auto_headers = "From: info@avchemicals.in\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\n";
$auto_body = "
<html><body style='font-family:Arial,sans-serif'>
<div style='max-width:600px;margin:0 auto'>
  <div style='background:#1B5E20;padding:28px;text-align:center'>
    <h2 style='color:#C9A84C;margin:0'>Thank You, {$name}!</h2>
  </div>
  <div style='padding:32px;color:#333'>
    <p>Thank you for contacting <strong>AV Chemicals</strong>. We have received your enquiry and our team will respond within <strong>24 business hours</strong>.</p>
    <p style='margin-top:16px'>Your reference number: <strong style='color:#2E7D32'>{$ref}</strong></p>
    <hr style='border:none;border-top:1px solid #eee;margin:24px 0'>
    <p style='font-size:0.9rem;color:#666'>AV Chemicals | Borivali (West), Mumbai 400 092<br>
    Phone: +91 22 2800 XXXX | Email: info@avchemicals.in<br>
    GST: 27ABVFA7475M1ZF</p>
  </div>
  <div style='background:#f9f7f2;padding:14px;text-align:center;font-size:11px;color:#aaa'>
    Designed, Developed &amp; Managed by <a href='https://www.idesigngroup.co.in' style='color:#2E7D32'>iDesign</a>
  </div>
</div>
</body></html>";

mail($email, 'Thank you for contacting AV Chemicals', $auto_body, $auto_headers);
echo json_encode(['success'=>true]);
exit;
