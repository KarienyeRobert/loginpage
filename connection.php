<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "database 1"; // Removed space from the database name
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo " ";
// No closing PHP tag to avoid accidental whitespace or newline characters
