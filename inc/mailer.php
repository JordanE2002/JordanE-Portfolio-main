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
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'b058737485c86e';  
        $mail->Password = 'ed95b0a3e2221f';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

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
