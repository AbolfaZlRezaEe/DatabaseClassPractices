<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_s5";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = 1;
$query1 = "SELECT id, name, email FROM tbl_user WHERE id = $userId";
$result1 = $conn->query($query1);
$specificUser = $result1->fetch_assoc();

var_dump($specificUser);

$conn->close();