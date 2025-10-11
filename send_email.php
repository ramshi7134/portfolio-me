<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Load .env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

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
    // SMTP configuration from .env
    $mail->isSMTP();
    $mail->Host       = $_ENV['SMTP_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USER'];
    $mail->Password   = $_ENV['SMTP_PASS'];
    $mail->SMTPSecure = $_ENV['SMTP_SECURE'];
    $mail->Port       = $_ENV['SMTP_PORT'];
    $mail->Timeout    = 30; // Increase timeout

    // Email headers
    $mail->setFrom($_ENV['SMTP_FROM'], 'Ramsheed Portfolio');
    $mail->addAddress($_ENV['SMTP_TO']);
    $mail->addReplyTo($email, $name);

    $mail->Subject = "New message from $name";
    $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    echo json_encode(['status'=>'success','message'=>'Message sent successfully']);
} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>"Mailer Error: {$mail->ErrorInfo}"]);
}
