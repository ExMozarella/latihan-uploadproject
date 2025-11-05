<?php
include 'koneksi.php';

// Mengambil data dari form dengan metode POST
$kode = $_POST['kode_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// Query SQL untuk memasukkan data ke tabel
$query = "INSERT INTO mahasiswa (kode_mahasiswa, nama_mahasiswa, nim, jurusan, alamat) VALUES ('$kode', '$nama', '$nim', '$jurusan', '$alamat')";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    // Jika berhasil, redirect kembali ke halaman utama
    header("Location: index.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>