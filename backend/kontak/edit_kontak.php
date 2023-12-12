<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_kontak'];
$edit_email=$_POST['edit_email'];
$edit_kontak=$_POST['edit_kontak'];
$edit_alamat=$_POST['edit_alamat'];
$edit_twitter=$_POST['edit_twitter'];
$edit_facebook=$_POST['edit_facebook'];
$edit_instagram=$_POST['edit_instagram'];

$query=mysqli_query($conn, "
    UPDATE kontak SET email='$edit_email', kontak='$edit_kontak', alamat='$edit_alamat', twitter='$edit_twitter', facebook='$edit_facebook', instagram='$edit_instagram' WHERE id='$id'
    ");

if ($query) {
    $response = array(
        'status' => 'success',
        'message' => 'Update data kontak berhasil.'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Ada kesalahan dalam update data.'
    );
}

// Ubah array response ke dalam format JSON
echo json_encode($response);
?>