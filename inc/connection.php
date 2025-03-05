<?php
// Load Composer's autoloader
require_once __DIR__ . '/../vendor/autoload.php'; // Adjust path as needed for your project

// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); // Adjust path if needed
$dotenv->load();

// Database connection details from .env
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_DATABASE'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD']; // It will be empty if no password is set

// Create a MySQLi connection
$mysqli = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Optionally, you can print a success message for debugging (Remove in production):
 echo "Connected to the database successfully!";

// Use $mysqli object for queries here

?>