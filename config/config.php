<?php
    $servername = "localhost"; // Sesuaikan dengan host database Anda
    $username = "root";//"cleon2023"; // Sesuaikan dengan username database Anda
    $password = "";//"cleon2023"; // Sesuaikan dengan password database Anda
    $dbname = "cleon5"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);

}
?>