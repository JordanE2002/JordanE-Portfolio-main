<?php
// Include the database connection
require_once 'connection.php';  // Ensure this includes your connection to the database

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate form fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Sanitize the email to avoid SQL injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Prepare the SQL query to insert data into the users table
    $stmt = $mysqli->prepare("INSERT INTO users (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $mysqli->error);
    }

    // Bind the parameters to the SQL query
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $subject, $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error submitting form: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$mysqli->close();
?>