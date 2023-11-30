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

// Mendapatkan seluruh data pemesanan
$id_produk = $_GET['id'];
$query = "SELECT * FROM `produk` WHERE id = $id_produk";
$result = $conn->query($query);

// Penanganan kesalahan eksekusi query
if ($result === false) {
    die("Error dalam menjalankan query: " . $conn->error);
}
?>

<?php
// Menutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin MilkMyDay</title>

    <!-- Custom fonts for this template-->
    <link href="cssadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="cssadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Update Produk !</h1>
                            </div> 
                           
                            <form method="POST" action="updateprodukaksi.php" class="user" enctype="multipart/form-data">
                     <?php while ($row = $result->fetch_assoc()): ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="namaproduk"
                            placeholder="Nama Produk" name="namaproduk" value="<?php echo $row['namaproduk']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="kandungan"
                            placeholder="Kandungan" name="kandungan" value="<?php echo $row['kandungan']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="harga"
                            placeholder="Harga" name="harga" value="<?php echo $row['harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="foto">Unggah Foto Produk:</label>
                        <input type="file" class="form-control-user" id="foto" accept="image/*" name="foto">
                    </div>
                    <input type="submit" value="Upload" class="btn btn-danger btn-user btn-block">
                    <hr>
                    <?php endwhile; ?>
                    </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>