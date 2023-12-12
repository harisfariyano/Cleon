<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

// tambah faq 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insert_pertanyaan = $_POST["insert_pertanyaan"] ?? '';
    $insert_jawaban = $_POST["insert_jawaban"] ?? '';

    $query = "INSERT INTO faq_content (question, answer)
              VALUES (?, ?)";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $insert_pertanyaan, $insert_jawaban );

if ($stmt->execute()) {
    header('Content-Type: application/json'); // Set header konten sebagai JSON
    echo json_encode(['status' => 'success', 'message' => 'faq berhasil ditambahkan.']);
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