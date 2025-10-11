<?php
require 'vendor/autoload.php';

header('Content-Type: application/json');

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status'=>'error','message'=>'Invalid request']);
    exit;
}

// Collect form data
$name = strip_tags($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$message = strip_tags($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(['status'=>'error','message'=>'All fields are required']);
    exit;
}

// SendGrid setup
$sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);

$emailContent = new \SendGrid\Mail\Mail();
$emailContent->setFrom($_ENV['PORTFOLIO_FROM_EMAIL'], $_ENV['PORTFOLIO_FROM_NAME']);
$emailContent->setSubject("New message from $name");
$emailContent->addTo($_ENV['PORTFOLIO_TO_EMAIL']); // Zoho inbox
$emailContent->addReplyTo($email, $name);
$emailContent->addContent("text/plain", "Name: $name\nEmail: $email\n\nMessage:\n$message");

try {
    $response = $sendgrid->send($emailContent);
    if ($response->statusCode() >= 200 && $response->statusCode() < 300) {
        echo json_encode(['status'=>'success','message'=>'Message sent successfully']);
    } else {
        echo json_encode(['status'=>'error','message'=>'SendGrid Error: '.$response->body()]);
    }
} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>'Exception: '.$e->getMessage()]);
}
