<?php
// Mulai sesi
session_start();

// Hentikan sesi (hapus semua data sesi)
session_destroy();

// Arahkan pengguna ke halaman login (ganti "login.php" dengan halaman login Anda)
header("Location:index.php");
exit; // Pastikan untuk keluar dari skrip
?>
