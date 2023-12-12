<?php
include('header.php');
?>


<!-- ======= About Us Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $judul; ?></h2>
          <div class="col-md-12">
          <p class="fst-italic text-center"><?php echo $dsection; ?>
          </p>
          </div>
        </div>
        <div class="section-header">
        <div class="row gy-4">
          <div class="col-lg-6">
            <h3><?php echo $jkontenp1; ?></h3>
            <img src="assets/img/<?php echo $gambarp1; ?>" class="img-fluid rounded-4 mb-4" alt="">
            <p class="fst-italic text-justify">
            <?php echo $kontenp1; ?>
            </p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic text-justify">
              <?php echo $kontenp2; ?>
              </p>
              <div class="position-relative mt-4">
                <img src="assets/img/<?php echo $gambarp2; ?>" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                <h3 style='margin: 17px;'><?php echo $jkontenp2; ?></h3>
              </div>
            </div>
          </div>
        </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

<?php
include('footer.php');
?>