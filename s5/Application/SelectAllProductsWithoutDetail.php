<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_s5";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1 = "SELECT id, name, price, amount FROM tbl_product";
$result1 = $conn->query($query1);
$productsWithoutDetail = $result1->fetch_all(MYSQLI_ASSOC);

var_dump($productsWithoutDetail);

$conn->close();