<!DOCTYPE html>
<html lang="en">
<?php
// Periksa versi PHP yang digunakan
$current_php_version = phpversion();

// Bandingkan dengan versi minimum yang diinginkan (7.4)
$minimum_php_version = '7.4';

// Jika versi PHP yang digunakan kurang dari 7.4, tampilkan pesan kesalahan
if (version_compare($current_php_version, $minimum_php_version, '<')) {
    // Tampilkan pesan kesalahan untuk versi PHP yang kurang dari 7.4
    http_response_code(500); // Atur kode status 500 - Internal Server Error
    echo "<h1>Galat: Versi PHP yang Anda gunakan ($current_php_version) tidak memenuhi persyaratan minimum.</h1>";
    echo "<p>Harap perbarui versi PHP Anda ke minimal 7.4 atau versi lebih tinggi.</p>";
    exit(); // Hentikan eksekusi lebih lanjut agar hanya pesan kesalahan yang ditampilkan
}
  // Sertakan file config.php
  include("config/config.php");
  // Mengambil data header dari backend
  include("backend/header.php");
  //Mengambil data produk dari backend
  include("backend/produk.php");
  // Mengambil data testimonial dari backend
  include("backend/testimonial.php");
  //Mengambil data TOS dari backend
  include("backend/TOS.php");
  //Mengambil data FAQ dari backend
  include("backend/FAQ.php");
  //Mengambil data about dari backend
  include("backend/about.php");
  //mengambil data filter button dari backend
  include("backend/button.php");
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $hero_data['title']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $icon; ?>" rel="icon">
  <link href="<?php echo $icon; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="https://wa.me/<?php echo $kontak; ?>"><?php echo $kontak; ?></a></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
        <a href="<?php echo $twitter; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="<?php echo $facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
    </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo $logo; ?>" alt="">
        <!--h1>Cleon</h1-->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php"><?php echo $home; ?></a></li>
          <li><a href="product.php"><?php echo $product; ?></a></li>
          <li class="dropdown"><a href="#"><span><?php echo $my_cleon; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <!--li class="dropdown"><a href="#"><span>Contact</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                </ul>
              </li-->
              <li><a href="TOS.php">TOS</a></li>
              <li><a href="FAQ.php">FAQ</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><?php echo $login; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href=admin/index.php>Login Admin</a></li>
              <li><a href=# target="_blank">Login User</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->
