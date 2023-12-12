<?php
error_reporting(0); // Menonaktifkan pesan kesalahan
// Sambungkan ke database
include('../config/config.php');

// Query untuk mengambil data FAQ dari database
$sql = "SELECT * FROM faq_content";
$result = $conn->query($sql);

$faq_items = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faq_items[] = array(
            'question' => $row['question'],
            'answer' => $row['answer']
        );
    }
}
?>
