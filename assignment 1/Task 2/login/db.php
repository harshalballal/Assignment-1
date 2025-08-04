<?php
$host = "localhost";
$user = "root";       // Change if needed
$pass = "";           // Change if you set a password
$dbname = "user_auth";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
