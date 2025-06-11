<?php
require_once 'connection.php'; 
require_once 'mailer.php';  // Include the mailer.php file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitize_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $first_name = sanitize_input($_POST['firstName']);
    $last_name = sanitize_input($_POST['lastName']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }

    $sql = "INSERT INTO users (firstName, lastName, email, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
        if ($stmt->execute()) {
            // Call the function to send the email from mailer.php
            sendEmailToAdmin($first_name, $email, $subject, $message);
            echo "success"; // Send success response without showing email details
        } else {
            echo "Database error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        die("Error preparing statement: " . $mysqli->error);
    }
}
?>
