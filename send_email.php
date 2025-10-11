<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to Composer autoload

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    echo json_encode(['status'=>'error','message'=>'Invalid request']);
    exit;
}

// Collect and sanitize form data
$name = strip_tags($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$message = strip_tags($_POST['message'] ?? '');

if(empty($name) || empty($email) || empty($message)){
    echo json_encode(['status'=>'error','message'=>'All fields are required']);
    exit;
}

$mail = new PHPMailer(true);
try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';       // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'noreplay.mailsend@gmail.com';   // SMTP username
    $mail->Password = 'bgqa tshw dezo tfac';// SMTP password or app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email headers
    $mail->setFrom('your@gmail.com', 'Ramsheed Portfolio');
    $mail->addAddress('me@ramsheed.com'); // Your email
    $mail->addReplyTo($email, $name);

    $mail->Subject = "New message from $name";
    $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    echo json_encode(['status'=>'success','message'=>'Message sent successfully']);
} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>"Mailer Error: {$mail->ErrorInfo}"]);
}
