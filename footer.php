  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <!--span>Cleon</span-->
            <img src="assets/img/logo_cleon.png"alt="">
          </a>
          <p>Alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunakan internet.</p>
          <div class="social-links d-flex mt-4">
            <a href="<?php echo $twitter; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="<?php echo $facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="FAQ.php">Frequently asked questions</a></li>
            <li><a href="TOS.php">Terms of service</a></li>
          </ul>
        </div>

        <!--div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div-->

        <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <p><?php echo $alamat;?></p>
            <!-- <p>Jln. Sidobali 8 Umbulharjo <br>Yogyakarta<br>Indonesia<br></p> -->
            <br>
            <strong>Phone: </strong> <?php echo $kontak; ?><br>
            <strong>Email: </strong> <?php echo $email; ?><br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $hero_data['title']; ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href=index.php><?php echo $hero_data['title']; ?></a>
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
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- ss -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
      const urlParams = new URLSearchParams(window.location.search);
      const filterParam = urlParams.get("filter");
      
      // Dapatkan semua tombol filter
      const filterButtons = document.querySelectorAll('.filter-btn');
      
      // Loop melalui setiap tombol filter
      filterButtons.forEach(button => {
          // Periksa apakah nilai data-filter pada tombol filter sesuai dengan filterParam
          if (button.getAttribute('data-filter') === filterParam) {
              // Jika sesuai, tambahkan kelas 'active' pada tombol tersebut
              button.classList.add('active');
          }
      });
  });
  </script>


</body>
</html>