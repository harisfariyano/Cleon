<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

$id = $_POST['id_about'];
$edit_judul = $_POST['edit_judul'];
$edit_dsection = $_POST['edit_dsection'];
$edit_jkontenp1 = $_POST['edit_jkontenp1'];
$edit_gambarp1 = $_FILES['edit_gambarp1']['name'];
$edit_kontenp1 = $_POST['edit_kontenp1'];
$edit_jkontenp2 = $_POST['edit_jkontenp2'];
$edit_gambarp2 = $_FILES['edit_gambarp2']['name'];
$edit_kontenp2 = $_POST['edit_kontenp2'];

// Ambil data gambar yang sudah ada dari database
$query = mysqli_query($conn, "SELECT gambarp1, gambarp2 FROM about WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// Tentukan nama file yang ada dalam database
$existing_gambarp1 = $data['gambarp1'];
$existing_gambarp2 = $data['gambarp2'];

$gambarp1_path = ''; // Variabel untuk menyimpan path gambar pertama
$gambarp2_path = ''; // Variabel untuk menyimpan path gambar kedua

// Periksa apakah ada file yang diupload pertama
if (!empty($edit_gambarp1)) {
    $gambarp1_tmp = $_FILES['edit_gambarp1']['tmp_name'];
    $gambarp1_path = basename($edit_gambarp1); // Ambil hanya nama file

    // Pindahkan file yang diupload ke folder penyimpanan
    move_uploaded_file($gambarp1_tmp, '../../assets/img/' . $gambarp1_path);
} else {
    // Jika file tidak diunggah, gunakan kembali nama file yang ada
    $gambarp1_path = $existing_gambarp1;
}

// Periksa apakah ada file yang diupload kedua
if (!empty($edit_gambarp2)) {
    $gambarp2_tmp = $_FILES['edit_gambarp2']['tmp_name'];
    $gambarp2_path = basename($edit_gambarp2); // Ambil hanya nama file

    // Pindahkan file yang diupload ke folder penyimpanan
    move_uploaded_file($gambarp2_tmp, '../../assets/img/' . $gambarp2_path);
} else {
    // Jika file tidak diunggah, gunakan kembali nama file yang ada
    $gambarp2_path = $existing_gambarp2;
}

// Perbarui data dalam database dengan nama file yang baru atau yang sudah ada
$query = mysqli_query($conn, "
    UPDATE about SET 
    judul='$edit_judul', 
    dsection='$edit_dsection', 
    jkontenp1='$edit_jkontenp1', 
    gambarp1='$gambarp1_path', 
    kontenp1='$edit_kontenp1', 
    jkontenp2='$edit_jkontenp2', 
    gambarp2='$gambarp2_path', 
    kontenp2='$edit_kontenp2' 
    WHERE id='$id'
");

if ($query) {
    $response = array(
        'status' => 'success',
        'message' => 'Update data about berhasil.'
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
