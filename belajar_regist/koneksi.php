<?php
// Konfigurasi koneksi database
$host = "localhost"; // Nama server database
$user = "root";      // Username database (default AMPPS adalah "root")
$pass = "mysql";     // <<<<<< UBAH BAGIAN INI
$db   = "data";      // Nama database yang sudah kita buat

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>