<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Load PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Function to send an email to the admin (you) from the user's email
 */
function sendEmailToAdmin($firstName, $email, $subject, $message) {
    $mail = new PHPMailer(true);

    try {
        // Mailtrap SMTP Configuration
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = filter_var($_ENV['MAIL_SMTP_AUTH'], FILTER_VALIDATE_BOOLEAN);
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Port = $_ENV['MAIL_PORT'];

        // Email Details
        $mail->setFrom($email, $firstName); // Use user's email as sender
        $mail->addAddress('your-email@example.com', 'Your Name'); // Change to your email
        $mail->addReplyTo($email, $firstName); // Ensure replies go to the user

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $firstName";
        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $firstName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";
        $mail->AltBody = "New message from $firstName\nEmail: $email\nSubject: $subject\nMessage: $message";

        $mail->send();
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo); // Log errors, but don't show them to the user
    }
}
?>
