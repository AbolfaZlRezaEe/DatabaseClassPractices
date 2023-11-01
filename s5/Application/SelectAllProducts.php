<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_s5";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1 = "SELECT id, detail_information FROM tbl_product";
$result1 = $conn->query($query1);
$detailInformationOnly = $result1->fetch_all(MYSQLI_ASSOC);

var_dump($detailInformationOnly);

$conn->close();