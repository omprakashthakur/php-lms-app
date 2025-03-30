<?php
echo "<h1>Welcome to the Learning Management System!</h1>";

// Database connection details for XAMPP
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP password is empty
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
