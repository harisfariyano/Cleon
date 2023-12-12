<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

// tambah paket 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insert_koneksi = $_POST["insert_koneksi"] ?? '';
    $insert_kategori = $_POST["insert_kategori"] ?? '';
    $insert_paket = $_POST["insert_paket"] ?? '';
    $insert_harga = $_POST["insert_harga"] ?? '';
    $insert_MA = $_POST["insert_MA"] ?? '';
    $insert_Kuota = $_POST["insert_Kuota"] ?? '';
    $insert_Kecepatan = $_POST["insert_Kecepatan"] ?? '';
    $insert_Deskripsi = $_POST["insert_Deskripsi"] ?? '';

    $query = "INSERT INTO paket_internet (koneksi, kategori ,nama_paket, harga, masa_aktiv, kuota, kecepatan, deskripsi)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssss", $insert_koneksi, $insert_kategori,$insert_paket, $insert_harga, $insert_MA, $insert_Kuota, $insert_Kecepatan, $insert_Deskripsi);

    if ($stmt->execute()) {
        header('Content-Type: application/json'); // Set header konten sebagai JSON
        echo json_encode(['status' => 'success', 'message' => 'Paket berhasil ditambahkan.']);
    } else {
        header('Content-Type: application/json'); // Set header konten sebagai JSON
        echo json_encode(['status' => 'error', 'message' => 'Kesalahan dalam menambahkan data.']);
    }

    $stmt->close();
} else {
    header('Content-Type: application/json'); // Set header konten sebagai JSON
    echo json_encode(['status' => 'error', 'message' => 'Data tidak dikirimkan.']);
}
?>
