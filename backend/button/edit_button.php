<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_navbar'];
$edit1=$_POST['edit1'];
$edit2=$_POST['edit2'];
$edit3=$_POST['edit3'];
$edit4=$_POST['edit4'];
$edit5=$_POST['edit5'];

$query = mysqli_query($conn, "
    UPDATE filter_button 
    SET button1='$edit1', button2='$edit2', button3='$edit3', button4='$edit4', button5= '$edit5' 
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