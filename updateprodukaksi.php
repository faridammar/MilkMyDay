<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'milkmyday';

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

// Check file size
if ($_FILES['foto']['size'] > 500000) {
    die("File size is too large");
}

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$id = $_POST['id'];
$namaproduk = $_POST['namaproduk'];
$kandungan = $_POST['kandungan'];
$harga = $_POST['harga'];
$foto = $target_file;

// Move uploaded file
if (!move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
    die("Failed to upload file");
}

$query = "UPDATE produk SET namaproduk = '$namaproduk', kandungan = '$kandungan', harga = '$harga', foto = '$foto' WHERE ID = $id";

if ($conn->query($query) === TRUE) {
    echo "Produk berhasil diupdate";
    header("Location: dashboardadmin.php");
} else {
    echo "Gagal mengupdate produk: " . $conn->error;
}

$conn->close();
?>