<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah data Mahasiswa</h2>
    <div class="form-container">
        <h3>Form Input</h3>
        <form action="proses_tambah.php" method="post">
            <div class="form-group">
                <label>Kode Mahasiswa</label>
                <input type="text" name="kode_mahasiswa" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>JURUSAN</label>
                <input type="text" name="jurusan" required>
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" required>
            </div>
            <div class="form-submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <a href="index.php" class="back-link">Kembali</a>
</body>
</html>