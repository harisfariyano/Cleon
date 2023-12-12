<?php
/* Delete data faq */
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

$id_faq=$_POST['id_faq'];

$query=mysqli_query($conn, "
    DELETE FROM faq_content WHERE id='$id_faq'
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data berhasil dihapus");
        window.location='../../admin/faq.php'; // Ganti dengan halaman yang diinginkan
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Ada kesalahan saat hapus ke database.");
        window.location='../../admin/faq.php';
    </script>
    <?php
}
?>
