<?php
echo "<h1>1. Welcome to the Learning Management System!</h1>";

// Database connection details for Docker Compose
$servername = "db"; // Use the service name from docker-compose.yml
$username = "root";
$password = "rootpassword"; // Use the password from docker-compose.yml environment
$dbname = "lms_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
}
echo "<p style='color:green;'>Connected successfully to the database!</p>";

$conn->close();

?>
