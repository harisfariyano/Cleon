<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_navbar'];
$edit_home=$_POST['edit_home'];
$edit_product=$_POST['edit_product'];
$edit_my_cleon=$_POST['edit_my_cleon'];
$edit_login=$_POST['edit_login'];

$query = mysqli_query($conn, "
    UPDATE navbar 
    SET home='$edit_home', product='$edit_product', my_cleon='$edit_my_cleon', login='$edit_login' 
    WHERE id='$id'
");

if ($query) {
    $response = array(
        'status' => 'success',
        'message' => 'Update data navbar berhasil.'
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