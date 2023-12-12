<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database
// tambah tos 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insert_title_tos = $_POST["insert_title_tos"] ?? '';
    $insert_incon_tos = $_POST["insert_incon_tos"] ?? '';
    $insert_deskripsi_tos = $_POST["insert_deskripsi_tos"] ?? '';

    $query = "INSERT INTO tos_content (title, icon_class, deskripsi)
              VALUES (?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $insert_title_tos, $insert_incon_tos, $insert_deskripsi_tos);

    if ($stmt->execute()) {
        header('Content-Type: application/json'); // Set header konten sebagai JSON
        echo json_encode(['status' => 'success', 'message' => 'tos berhasil ditambahkan.']);
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