<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

$id=$_POST['id_paket'];

$query=mysqli_query($conn, "
    DELETE FROM paket_internet WHERE id='$id'
    ");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Paket berhasil dihapus");
        window.location='../../admin/paket.php';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Ada kesalahan saat hapus ke database.");
        window.location='../../admin/paket.php';
    </script>
    <?php
}
?>
