<?php
// Informasi koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'milkmyday';

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Memeriksa apakah ID diberikan
if (isset($_GET['id'])) {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Hapus data dari database
    $query = "DELETE FROM `users` WHERE id=$id";
    $result = $conn->query($query);

    // Redirect ke halaman data pemesanan
    header("Location: datapemesanan.php");
}

// Jika tidak ada ID yang diberikan, kembali ke halaman utama
else {
    header("Location: datapemesanan.php");
}

// Menutup koneksi database
$conn->close();
?>