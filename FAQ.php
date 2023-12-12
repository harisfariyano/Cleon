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
              <h2>FAQ</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>FAQ</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

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