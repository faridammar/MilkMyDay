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

// Memeriksa apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $people = $_POST['people'];
    $message = $_POST['message'];

    // Update data ke database
    $query = "UPDATE `order` SET name='$name', email='$email', phone='$phone', date='$date', people='$people', message='$message' WHERE id=$id";
    $result = $conn->query($query);

    // Redirect ke halaman data pemesanan
    header("Location: datapemesanan.php");
}

// Jika tidak ada data yang diberikan, kembali ke halaman utama
else {
    header("Location: datapemesanan.php");
}

// Menutup koneksi database
$conn->close();
?>