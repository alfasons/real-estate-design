<?php
session_start(); // Start session

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Validate CSRF token and AJAX request
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) ||
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest' ||
        !isset($_SESSION['csrf_token']) ||
        $_POST['csrf_token'] !== $_SESSION['csrf_token']
    ) {
        die(json_encode(array('success' => false, 'message' => 'Invalid request or CSRF token validation failed')));
    }

    // Validate CAPTCHA
    if (!isset($_POST['captcha_input'], $_SESSION['captcha']) || $_POST['captcha_input'] !== $_SESSION['captcha']) {
        die(json_encode(['success' => false, 'message' => 'Incorrect CAPTCHA. Please try again.']));
    }
    
    // Clear the CAPTCHA session after successful validation
    unset($_SESSION['captcha']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
       
        $mail->isSMTP();
        $mail->Host       = 'smtp0001.neo.space';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'mitsonky@mjrealestatesolves.com';
        $mail->Password   = 'La.Jan$2';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
    
        // Recipients
        $mail->setFrom('mitsonky@mjrealestatesolves.com', 'savemyhomesolutions');
        $mail->addAddress('mitsonky@mjrealestatesolves.com', 'Recipient Name');
        $mail->addBCC('kibet780@gmail.com');

       
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Request from ' . $_POST['name'];
        $mail->Body    = 'Address: ' . $_POST['q'] . '<br>' .
                         'Name: ' . $_POST['name'] . '<br>' .
                         'Phone: ' . $_POST['phone'];

        // Send email
        $mail->send();
        echo json_encode(array('success' => true, 'message' => 'Request has been sent successfully.'));
    } catch (Exception $e) {
        echo json_encode(array('success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo));
    }
    exit; // Stop the script after handling POST
}

// If the script reaches this point, the request method is not POST
echo json_encode(array('success' => false, 'message' => 'No POST request received'));
?>
