<?php
if ($_FILES['foto']['error'] !== 0) {
    die("Error uploading file");
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['foto']['name']);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a valid image
if (!preg_match("/^image\/(jpe?g|png|gif)$/", $_FILES['foto']['type'])) {
    die("Invalid file type");
}

// Check if file already exists
if (file_exists($target_file)) {
    die("File already exists");
}

// Check file size
if ($_FILES['foto']['size'] > 500000) {
    die("File size is too large");
}

// Move uploaded file
if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
    die("Failed to upload file");
}

// Insert image information into database
$namaproduk = $_POST['namaproduk'];
$kandungan = $_POST['kandungan'];
$harga = $_POST['harga'];
$foto = $target_file;

$db = new mysqli('localhost', 'root', '', 'milkmyday');
$sql = "INSERT INTO produk (namaproduk, kandungan, harga, foto) VALUES ('$namaproduk', '$kandungan', '$harga', '$foto')";

if ($db->query($sql) === TRUE) {
    echo "Image uploaded successfully";
    header("Location: dashboardadmin.php");
} else {
    echo "Error uploading image: " . $db->error;
}
?>