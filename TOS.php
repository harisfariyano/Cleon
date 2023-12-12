<?php
include('header.php');
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>TOS</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>TOS</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Terms Of Services (TOS)</h2>
            <p>Adalah perjanjian dimana pelanggan menyetujui sebelum menggunakan layanannya. Perjanjian ini dibuat dan secara otomatis mengikat pengguna layanan internet CLEON. Perjanjian ini dibuat sedemikian rupa demi kepentingan bersama, serta keleluasaan dan keamanan pelanggan dalam memanfaatkan layanan internet CLEON.</p>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        <?php foreach ($tos_items as $item) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi <?php echo $item['icon_class']; ?>"></i>
                    </div>
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['deskripsi']; ?></p>
                    <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->
        <?php } ?>
</div>
</section><!-- End Our Services Section -->

</main><!-- End #main -->

<?php
include('footer.php');
?>