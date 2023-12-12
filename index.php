<?php
include('header.php');
//Mengambil data produk dari backend
include("backend/produk.php");
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

$faq_items = array_slice($faq_items, 0, 5);
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>#<?php echo $hero_data['tagline']; ?></h2>
          <p><?php echo $hero_data['deskripsi']; ?></p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="product.php" class="btn-get-started">CEK PAKETNYA DISINI!!</a>
            <!--a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a-->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/<?php echo $hero_data['gambar']; ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

<div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-router"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Instalasi Gratis</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Tersedia banyak paket</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock-fill"></i></div>
              <h4 class="title"><a href="" class="stretched-link">CS hotline 24 jam</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fleksible</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
  
  <main id="main">


  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Rekomendasi</h2>
        <p>PAKET MEGACLEON 2022</p>
      </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
          <?php
          $count = 0; // Menghitung jumlah rekomendasi yang telah ditampilkan
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  // Ambil data dari database dan masukkan ke dalam template HTML
                  $namaPaket = $row["nama_paket"];
                  $harga = $row["harga"];
                  $masaAktiv = $row["masa_aktiv"];
                  $kuota = $row["kuota"];
                  $kecepatan = $row["kecepatan"];
                  $deskripsi = $row["deskripsi"];
                  ?>
                  <div class="col-lg-4">
                    <div class="pricing-item">
                      <h3><?php echo $namaPaket; ?></h3>
                      <h4><sup>Rp</sup><?php echo $harga; ?><span> / <?php echo $masaAktiv; ?></span></h4>
                      <ul>
                        <li><i class="bi bi-globe"></i> <?php echo $kuota; ?></li>
                        <li><i class="bi bi-speedometer"></i> <?php echo $kecepatan; ?> Mbps</li>
                        <li><i class="bi bi-calendar2-check"></i> <?php echo $masaAktiv; ?></li>
                        <p><?php echo $deskripsi; ?></p>
                      </ul>
                      <div class="text-center"><a href="https://wa.me/<?php echo $kontak; ?>" class="buy-btn">Beli Sekarang</a></div>
                    </div>
                  </div><!-- End Pricing Item -->
                  <?php
                  $count++;
                  if ($count >= 3) {
                      break; // Hentikan loop setelah menampilkan 3 rekomendasi
                  }
              }
          } else {
              echo "Tidak ada data paket internet.";
          }
          ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Statistik</h2>
        <p></p>
      </div>
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <img src="assets/img/presentasi.png" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6">
            <?php
            // Buat query SQL untuk mengambil data statistik dari database
            $sql = "SELECT * FROM statistik";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                // Ambil data statistik dari database
                $happyClients = $row['happy_clients'];
                $projects = $row['projects'];
                $hoursOfSupport = $row['hours_of_support'];

                // Tampilkan data statistik dalam elemen HTML
                echo '<div class="stats-item d-flex align-items-center">';
                echo '<span data-purecounter-start="0" data-purecounter-end="' . $happyClients . '" data-purecounter-duration="1" class="purecounter"></span>';
                echo '<p><strong>Happy Clients</strong> ' . $row['happy_clients_description'] . '</p>';
                echo '</div>';

                echo '<div class="stats-item d-flex align-items-center">';
                echo '<span data-purecounter-start="0" data-purecounter-end="' . $projects . '" data-purecounter-duration="1" class="purecounter"></span>';
                echo '<p><strong>Projects</strong> ' . $row['projects_description'] . '</p>';
                echo '</div>';

                echo '<div class="stats-item d-flex align-items-center">';
                echo '<span data-purecounter-start="0" data-purecounter-end="' . $hoursOfSupport . '" data-purecounter-duration="1" class="purecounter"></span>';
                echo '<p><strong>Hours Of Support</strong> ' . $row['hours_of_support_description'] . '</p>';
                echo '</div>';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                        <p>Beberapa Daftar Pertanyaan Untuk Cleon</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                        <?php foreach ($faq_items as $key => $item) { ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $key + 1; ?>">
                                        <span class="num"><?php echo $key + 1; ?>.</span>
                                        <?php echo $item['question']; ?>
                                    </button>
                                </h3>
                                <div id="faq-content-<?php echo $key + 1; ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                    <?php echo $item['answer']; ?>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->
</main><!-- End #main -->


<?php
include('footer.php');
?>