<?php
// Sertakan file config.php
require_once("config/config.php");

// Inisialisasi variabel filter
$filter = "Semua"; // Nilai default untuk filter

// Periksa apakah parameter filter telah diterima melalui URL
if (isset($_GET['filter'])) {
    // Jika parameter filter diterima, gunakan nilainya
    $filter = $_GET['filter'];

    // Berdasarkan nilai filter, atur query SQL yang sesuai
    if ($filter === "PaketTime") {
        $sql = "SELECT * FROM paket_internet WHERE kategori = 'Paket Time Based'";
    } elseif ($filter === "PaketUse") {
        $sql = "SELECT * FROM paket_internet WHERE kategori = 'Paket Used Based'";
    } elseif ($filter === "PaketUnli") {
        $sql = "SELECT * FROM paket_internet WHERE kategori = 'Paket Unlimited'";
    } elseif ($filter === "PaketSS") {
        $sql = "SELECT * FROM paket_internet WHERE kategori = 'Paket SS'";
    } else {
        // Jika filter "Semua" atau tidak dikenal, tampilkan semua data
        $sql = "SELECT * FROM paket_internet";
    }
} else {
    // Jika parameter filter tidak ada, tampilkan semua data
    $sql = "SELECT * FROM paket_internet";
}

$result = $conn->query($sql);
?>