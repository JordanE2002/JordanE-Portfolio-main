<?php
// Load Composer's autoloader
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// Load the .env file from the current directory
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database connection
$mysqli = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE'], $_ENV['DB_PORT']);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Database connection successful!<br>";

// Data to insert (simulating user input)
$fullName = 'John Doe';
$email = 'john.doe@example.com';
$message = 'This is a test message.';

// Split the full name into first and last name
list($firstName, $lastName) = explode(' ', $fullName, 2); // This splits "John Doe" into "John" and "Doe"

// Insert data into the database (assuming you have a table called `users` with columns firstName, lastName, email, and message)
$sql = "INSERT INTO users (firstName, lastName, email, message) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $firstName, $lastName, $email, $message); // Use 'ssss' for 4 string parameters

if ($stmt->execute()) {
    echo "Data successfully inserted into the database!<br>";
} else {
    echo "Error inserting data: " . $stmt->error . "<br>";
}

// Close the database connection
$stmt->close();
$mysqli->close();

// Sending email using MailTrap
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth = filter_var($_ENV['MAIL_SMTP_AUTH'], FILTER_VALIDATE_BOOLEAN);
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
    $mail->Port = $_ENV['MAIL_PORT'];

    $mail->setFrom('test@example.com', 'Test');
    $mail->addAddress('your-email@example.com', 'Admin');  // Replace with your email

    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email to check the connection with MailTrap.';

    $mail->send();
    echo 'Mail sent successfully!<br>';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
