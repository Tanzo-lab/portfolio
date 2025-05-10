<?php
$host = "localhost";        // Your host (usually localhost)
$dbUsername = "root";       // Your DB username
$dbPassword = "";           // Your DB password
$dbName = "portfolio";  // Your database name

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
