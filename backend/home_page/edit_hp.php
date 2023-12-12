<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/

$id=$_POST['id_hero'];
$edit_tagline=$_POST['edit_tagline'];
$edit_deskripsi=$_POST['edit_deskripsi'];
$edit_gambar=$_FILES['edit_gambar']['name'];


// Ambil data gambar yang sudah ada dari database
$query = mysqli_query($conn, "SELECT gambar FROM hero_content WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// Tentukan nama file yang ada dalam database
$existing_gambar = $data['gambar'];

$gambar_path = ''; // Variabel untuk menyimpan path gambar pertama
        
// Periksa apakah ada file yang diupload pertama
if (!empty($edit_gambar)) {
    $gambar_tmp = $_FILES['edit_gambar']['tmp_name'];
    $gambar_path = basename($edit_gambar); // Ambil hanya nama file

    // Pindahkan file yang diupload ke folder penyimpanan
    move_uploaded_file($gambar_tmp, '../../assets/img/' . $gambar_path);
} else {
    // Jika file tidak diunggah, gunakan kembali nama file yang ada
    $gambar_path = $existing_gambar;
}

$query=mysqli_query($conn, "
    UPDATE hero_content SET tagline='$edit_tagline', deskripsi='$edit_deskripsi', gambar='$gambar_path' WHERE id='$id'
    ");

if ($query) {
    $response = array(
        'status' => 'success',
        'message' => 'Update data Home Page berhasil.'
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