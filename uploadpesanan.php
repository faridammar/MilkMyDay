<?php
require 'config.php';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$people = $_POST['people'];
$message = $_POST['message'];

// Insert the data into the database
$sql = "INSERT INTO `order` (name, email, phone, date, people, message)
VALUES ('$name', '$email', '$phone', '$date', '$people', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: success2.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>