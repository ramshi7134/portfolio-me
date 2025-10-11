<?php
require 'vendor/autoload.php';

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

// Ensure logs folder exists
$logDir = __DIR__ . '/logs';
if(!is_dir($logDir)){
    mkdir($logDir, 0775, true);
}
$logFile = $logDir . '/email.log';

// Logging function
function logEmail($message){
    global $logFile;
    $date = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$date] $message\n", FILE_APPEND);
}

// Only accept POST
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode(['status'=>'error','message'=>'Invalid request']);
    logEmail("Invalid request method: {$_SERVER['REQUEST_METHOD']}");
    exit;
}

// Collect and sanitize form data
$name = strip_tags($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$message = strip_tags($_POST['message'] ?? '');

if(empty($name) || empty($email) || empty($message)){
    echo json_encode(['status'=>'error','message'=>'All fields are required']);
    logEmail("Missing fields: name='$name', email='$email', message='$message'");
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

    // Log response
    logEmail("SendGrid Response Code: " . $response->statusCode());
    logEmail("SendGrid Body: " . $response->body());

    if($response->statusCode() >= 200 && $response->statusCode() < 300){
        echo json_encode(['status'=>'success','message'=>'Message sent successfully']);
    } else {
        echo json_encode(['status'=>'error','message'=>'Error sending message']);
    }

} catch (Exception $e) {
    logEmail("Exception: " . $e->getMessage());
    echo json_encode(['status'=>'error','message'=>'Error sending message']);
}
