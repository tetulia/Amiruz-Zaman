<?php
$host = "localhost";
$user = "root";      // MySQL username
$pass = "";          // MySQL password
$db   = "school_comments"; // Database name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
