<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

/*edit FAQ*/
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_faq'])) {
$id=$_POST['id_faq'];
$edit_pertanyaan=$_POST['edit_pertanyaan'];
$edit_jawaban=$_POST['edit_jawaban'];

$query=mysqli_query($conn, "
    UPDATE faq_content SET question='$edit_pertanyaan', answer='$edit_jawaban' WHERE id='$id'
    ");

    // Query untuk melakukan update data faq
    $stmt = $conn->prepare("
        UPDATE faq_content 
        SET 
            question=?, 
            answer=?
        WHERE 
            id=?
    ");
    
    // Binding parameter
    $stmt->bind_param("ssi", $edit_pertanyaan, $edit_jawaban, $id);

    if ($stmt->execute()) {
        // Jika pembaruan data berhasil
        $response = [
            'status' => 'success',
            'message' => 'Update faq berhasil.'
        ];
    } else {
        // Jika pembaruan data gagal
        $response = [
            'status' => 'error',
            'message' => 'Ada kesalahan dalam update faq.'
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