<?php
/* Delete data tos */
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database


$id_tos=$_POST['id_tos'];

$query=mysqli_query($conn, "
    DELETE FROM tos_content WHERE id='$id_tos'
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Data berhasil dihapus");
        window.location='../../admin/tos.php'; // Ganti dengan halaman yang diinginkan
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Ada kesalahan saat hapus ke database.");
        window.location='../../admin/tos.php';
    </script>
    <?php
}
?>
