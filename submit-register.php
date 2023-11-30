<?php
require 'config.php';

// Get the form data
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO users (nama, alamat, nohp, email, username, password)
VALUES ('$nama', '$alamat', '$nohp', '$email', '$username', '$password')";

// ce
if ($conn->query($sql) === TRUE) {
    header("Location: success2.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
