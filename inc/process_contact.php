<?php
// Include the database connection file
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_DATABASE'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$mysqli = new mysqli($host, $username, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $firstName = $mysqli->real_escape_string($_POST['firstName']);
    $lastName = $mysqli->real_escape_string($_POST['lastName']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $subject = $mysqli->real_escape_string($_POST['subject']);
    $message = $mysqli->real_escape_string($_POST['message']);
    
    // Simple validation (you can enhance this)
    if (empty($firstName) || empty($lastName) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Insert data into the database
    $query = "INSERT INTO users (first_name, last_name, email, subject, message) 
              VALUES ('$firstName', '$lastName', '$email', '$subject', '$message')";
    
    if ($mysqli->query($query) === TRUE) {
        // Success
        echo "Your message has been sent successfully!";
    } else {
        // Error
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }

    // Close the connection
    $mysqli->close();
}
?>