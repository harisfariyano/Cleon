<?php
include __DIR__ . '/../../config/config.php'; // Hubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (!empty($username) && !empty($password)) {
        $hashed_password = md5($password); // Sebaiknya gunakan metode hash yang lebih aman
        
        $stmt = $conn->prepare("SELECT * FROM apuser WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $hashed_password);
        $stmt->execute();
        $result = $stmt->get_result();
        $num_row = $result->num_rows;
        
        if ($num_row > 0) {
            // Jika login berhasil
            $response = array(
                'status' => 'success',
                'message' => 'Login Berhasil'
            );
        } else {
            // Jika login gagal
            $response = array(
                'status' => 'error',
                'message' => 'Maaf, Login Gagal. Silahkan coba lagi.'
            );
        }
    } else {
        // Jika form tidak diisi dengan lengkap
        $response = array(
            'status' => 'error',
            'message' => 'Maaf, Form tidak boleh kosong'
        );
    }

    // Mengirim respons dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Pastikan keluar dari skrip setelah mengirim respons
}
?>

