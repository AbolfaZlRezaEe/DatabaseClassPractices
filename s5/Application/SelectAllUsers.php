<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_s5";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1 = "SELECT id, name, email FROM tbl_user";
$result1 = $conn->query($query1);
$allUsers = $result1->fetch_all(MYSQLI_ASSOC);

var_dump($allUsers);

$conn->close();