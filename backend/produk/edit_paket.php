<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

// Tambahkan kondisi untuk memastikan data yang diterima sebelum melakukan pembaruan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_paket'])) {
    $id = $_POST['id_paket'];
    $edit_koneksi = $_POST['edit_koneksi'];
    $edit_kategori = $_POST['edit_kategori'];
    $edit_paket = $_POST['edit_paket'];
    $edit_harga = $_POST['edit_harga'];
    $edit_MA = $_POST['edit_MA'];
    $edit_Kuota = $_POST['edit_Kuota'];
    $edit_Kecepatan = $_POST['edit_Kecepatan'];
    $edit_Deskripsi = $_POST['edit_Deskripsi'];

    // Query untuk melakukan update data paket
    $stmt = $conn->prepare("
        UPDATE paket_internet 
        SET 
            Koneksi=?,
            Kategori=?,
            nama_paket=?, 
            harga=?, 
            masa_aktiv=?, 
            kuota=?, 
            kecepatan=?, 
            deskripsi=? 
        WHERE 
            id=?
    ");
    
    // Binding parameter
    $stmt->bind_param("ssssssssi", $edit_koneksi, $edit_kategori, $edit_paket, $edit_harga, $edit_MA, $edit_Kuota, $edit_Kecepatan, $edit_Deskripsi, $id);

    if ($stmt->execute()) {
        // Jika pembaruan data berhasil
        $response = [
            'status' => 'success',
            'message' => 'Update paket berhasil.'
        ];
    } else {
        // Jika pembaruan data gagal
        $response = [
            'status' => 'error',
            'message' => 'Ada kesalahan dalam update paket.'
        ];
    }

    $stmt->close(); // Tutup prepared statement
} else {
    // Jika data tidak dikirimkan dengan benar
    $response = [
        'status' => 'error',
        'message' => 'Data tidak lengkap atau tidak ditemukan.'
    ];
}

echo json_encode($response); // Mengirim balasan dalam format JSON
?>
