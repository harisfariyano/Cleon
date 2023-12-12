<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

// Tambahkan kondisi untuk memastikan data yang diterima sebelum melakukan pembaruan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_tos'])) {
    $id=$_POST['id_tos'];
    $edit_title=$_POST['edit_title'];
    $edit_icon=$_POST['edit_icon'];
    $edit_Deskripsi_tos=$_POST['edit_Deskripsi_tos'];

    // Query untuk melakukan update data tos
    $stmt = $conn->prepare("
        UPDATE tos_content 
        SET 
            title=?, 
            icon_class=?, 
            deskripsi=?
        WHERE 
            id=?
    ");
    
    // Binding parameter
    $stmt->bind_param("sssi", $edit_title, $edit_icon, $edit_Deskripsi_tos, $id);

    if ($stmt->execute()) {
        // Jika pembaruan data berhasil
        $response = [
            'status' => 'success',
            'message' => 'Update tos berhasil.'
        ];
    } else {
        // Jika pembaruan data gagal
        $response = [
            'status' => 'error',
            'message' => 'Ada kesalahan dalam update tos.'
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