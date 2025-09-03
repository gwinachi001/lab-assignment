<?php
$host = "localhost";
$user = "root";
$pass = "@Godwin001"; // or your actual MySQL password
$dbname = "student_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>