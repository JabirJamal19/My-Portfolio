<?php
session_start();

$servername = "localhost";
$username = "root";  // Use your database username
$password = "";      // Use your database password
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
