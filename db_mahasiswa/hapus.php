<?php
include 'koneksi.php';

// Mengambil kode dari URL
$kode = $_GET['kode'];

// Query SQL untuk menghapus data berdasarkan kode
$query = "DELETE FROM mahasiswa WHERE kode_mahasiswa='$kode'";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>