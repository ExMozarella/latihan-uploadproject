<?php
include 'koneksi.php';

// Mengambil data dari form
$kode_lama = $_POST['kode_mahasiswa_lama'];
$kode_baru = $_POST['kode_mahasiswa'];
$nama = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

// Query SQL untuk update data
$query = "UPDATE mahasiswa SET 
            kode_mahasiswa='$kode_baru', 
            nama_mahasiswa='$nama', 
            nim='$nim', 
            jurusan='$jurusan', 
            alamat='$alamat' 
          WHERE kode_mahasiswa='$kode_lama'";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>