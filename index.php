<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MilkMyDay - XC Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>MilkMyDay<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Info</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Developers</a></li>
          <li><a href="#contact">Peta Susu</a></li>
        </ul>
      </nav><!-- .navbar -->
      <a class="btn-book-a-table" href="logout.php">Logout</a>
      <a class="btn-book-a-table" href="#book-a-table">Pesan Susu</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Bantu Tingkatkan Gizi Anak Dengan <br>Mengkonsumsi Susu Anti Laktosa </h2>
          <p data-aos="fade-up" data-aos-delay="100" style=" text-align: justify;">Sekarang anak yang mengidap alergi kandungan laktosa pada susu hewani dapat merasakan susu anti kandungan laktosa yang kaya akan gizi serta vitamin yang baik untuk tubuh anak</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Pesan Susu</a>
            <a href="https://www.youtube.com/watch?v=PdU0UiR1dIk&ab_channel=RSPremierJatinegara" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/as.png" class="img-fluid" alt="" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <h3>Apa Itu Intoleran Laktosa?</h3>
              <p>
                Intoleran Laktosa adalah kondisi dimana seseorang tidak bisa sepenuhnya mencerna laktosa atau disebut juga dengan gula yang terdapat didalam susu. Yang mana akan mengakibatkan mereka mengalami diare, perut bergas, dan kembung setelah meminum atau memakan produk susu. 
              </p>
              <h3>Penyebab Intoleran Laktosa</h3>
              <p>
                Kondisi ini terjadi ketika usus kecil tidak menghasilkan cukup enzim (laktase) untuk mencerna laktosa pada susu atau produk olahannya. Biasanya, laktase mengubah gula susu menjadi dua gula sederhana (glukosa dan galaktosa), yang diserap ke dalam aliran darah melalui lapisan usus. Jika seseorang kekurangan laktase, laktosa dalam makanan bergerak ke usus besar alih-alih diproses dan diserap.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Adakah Manfaat Dari Susu Bebas Laktosa ?</h3>
              <p>
                Sekarang anak yang mengidap alergi kandungan laktosa pada susu hewani dapat merasakan susu bebas kandungan laktosa yang kaya akan gizi serta vitamin yang baik untuk tubuh anak.
              </p>
            </div>
          </div><!-- End Why Box -->
          
          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="why-box">
                  <h4>Gejala Intoleran Laktosa</h4>
                  <p>Sering buang angin
                    Perut kembung
                    Nyeri perut
                    Diare
                    Perut berbunyi “krucuk-krucuk” (borborygmi)
                    Mual dan muntah</p>
                </div>
              </div><!-- End Icon Box -->
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                  <h4>Mencegah Intoleran Laktosa</h4>
                  <p>
                    Intoleransi laktosa tidak dapat dicegah. Jika Anda menderita kondisi ini, batasilah konsumsi makanan atau minuman yang mengandung laktosa atau hindari secara total agar gejalanya tidak muncul.
                  </p>
                </div>
              </div><!-- End Why Box -->
              
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="why-box">
                  <h4>Intoleransi laktosa primer</h4>
                  <p>Disebabkan oleh faktor genetik yang diturunkan dari orang tua. Kondisi ini terjadi ketika produksi laktase menurun seiring bertambahnya usia. Biasanya, mulai terjadi pada usia 2 tahun, tetapi keluhan baru muncul saat masa remaja atau dewasa.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
      <div class="container" data-aos="zoom-out">
        <div class="section-header">
          <h2>Gambaran </h2>
          <p>Gejala Intoleran <span>laktosa</span></p>
        </div>
        <a href="assets/img/alergy.png" class="glightbox"><img src="assets/img/alergy.png"></a>
      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Berbagai Macam</h2>
          <p>Susu Anti Laktosa <span>Tersedia Saat ini</span></p>
        </div>

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

// Mendapatkan data produk dari database
$query = "SELECT * FROM produk";
$result = $conn->query($query);

// Penanganan kesalahan eksekusi query
if ($result === false) {
    die("Error dalam menjalankan query: " . $conn->error);
}
?>

<div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

        <?php while ($row = $result->fetch_assoc()):

            ?>

            <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                    <a class="glightbox"><img src="<?php echo $row['foto']; ?>" alt="Foto Produk" style="width: auto; height: auto;" class="menu-img img-fluid"></a>
                    <h4><?php echo $row['namaproduk']; ?></h4>
                    <p class="ingredients">
                        <?php echo $row['kandungan']; ?>
                    </p>
                    <p class="price">
                        Rp. <?php echo $row['harga']; ?>
                    </p>
                </div></div>

        <?php endwhile; ?>

    </div></div> 
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book A Milk</h2>
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pesan Produk </h1>
                            </div>
                            <form method="post" action="uploadpesanan.php" class="user" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email"
                                        placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="phone"
                                        placeholder="Number phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="date"
                                        placeholder="Date" name="date">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="people"
                                        placeholder="People" name="people">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="message"
                                        placeholder="Message" name="message">
                                </div>
                                <br>
                                <input type="submit" value="Pesan" class="btn btn-danger btn-user btn-block">
                               
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Developers</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/hafidz.png"><img src="assets/img/gallery/hafidz.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/alfan.png"><img src="assets/img/gallery/alfan.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/lina.png"><img src="assets/img/gallery/lina.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/athallah.png"><img src="assets/img/gallery/athallah.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Cari Tempat Jualan Susu Bebas Laktosa Disini</h2>
          <p>Temukan Berdasarkan Tempat Terdekatmu !</p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="map.html" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>milkmyday@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 8138 0090 798</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
            Jl. Kumbang No.14, RT.02/RW.06 <br>
            Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +62 8138 0090 798<br>
              <strong>Email:</strong> milkmyday@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MilkMyDay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">MilkMyDay</a>
      </div>
    </div>


  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>