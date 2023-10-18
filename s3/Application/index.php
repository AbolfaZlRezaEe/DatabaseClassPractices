<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_s3";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = "Abolfazl";
$phone_number = "1234567890";
$email = "abolfazl@gmail.com";
$is_deleted = 0;

$userInsertSql = "INSERT INTO tbl_user (username, phone_number, email, is_deleted) VALUES ('$username', '$phone_number', '$email', $is_deleted)";

if ($conn->query($userInsertSql) === TRUE) {
    echo "User inserted successfully" . PHP_EOL;
} else {
    echo "Error inserting user: " . $conn->error . PHP_EOL;
}

$user_id = $conn->insert_id;

$message = "Hello, this is a test message";

$messageInsertSql = "INSERT INTO tbl_message (user_id, message) VALUES ($user_id, '$message')";

if ($conn->query($messageInsertSql) === TRUE) {
    echo "Message inserted successfully" . PHP_EOL;
} else {
    echo "Error inserting message: " . $conn->error . PHP_EOL;
}

$conn->close();

