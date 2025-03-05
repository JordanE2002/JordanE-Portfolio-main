<?php
// Include database connection
require_once 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    function sanitize_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $first_name = sanitize_input($_POST['firstName']);
    $last_name = sanitize_input($_POST['lastName']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);

    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }

    // Insert into the database
    $sql = "INSERT INTO users (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
        if ($stmt->execute()) {
            echo "success"; // Send success message
        } else {
            echo "Database error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        die("Error preparing statement: " . $mysqli->error);
    }
}
?>