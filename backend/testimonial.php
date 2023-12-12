
<?php
// Sertakan file konfigurasi database
    require_once('config/config.php');
// Ambil data testimonial dari database
    $sql_testimonials = "SELECT * FROM testimonials";
    $result_testimonials = $conn->query($sql_testimonials);
?>