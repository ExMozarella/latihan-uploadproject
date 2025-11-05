<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include 'koneksi.php';
    $kode = $_GET['kode']; // Mengambil kode dari URL
    $query = "SELECT * FROM mahasiswa WHERE kode_mahasiswa='$kode'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>

    <h2>Edit data Mahasiswa</h2>
    <div class="form-container">
        <h3>Form Edit</h3>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="kode_mahasiswa_lama" value="<?php echo $data['kode_mahasiswa']; ?>">

            <div class="form-group">
                <label>Kode Mahasiswa</label>
                <input type="text" name="kode_mahasiswa" value="<?php echo $data['kode_mahasiswa']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>
            </div>
            <div class="form-group">
                <label>JURUSAN</label>
                <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
            </div>
            <div class="form-submit">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
    <a href="index.php" class="back-link">Kembali</a>
</body>
</html>