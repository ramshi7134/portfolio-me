<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use SendGrid\Mail\Mail;

// JSON response header
header('Content-Type: application/json');

// Load .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Check required fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'All fields are required.'
    ]);
    exit;
}

try {
    $email = new Mail();
    $email->setFrom($_ENV['PORTFOLIO_FROM_EMAIL'], $_ENV['PORTFOLIO_FROM_NAME']);
    $email->setSubject("New message from portfolio contact form");

    $name = htmlspecialchars($_POST['name']);
    $emailId = htmlspecialchars($_POST['email']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $body = "
        <h3>Contact Form Message</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$emailId}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $email->addTo($_ENV['PORTFOLIO_TO_EMAIL']);
    $email->addContent("text/html", $body);

    $sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
    $response = $sendgrid->send($email);

    if ($response->statusCode() == 202) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Message sent successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to send email. Status: ' . $response->statusCode(),
            'response' => $response->body()
        ]);
    }

} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Error: ' . $e->getMessage()
    ]);
}
