<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="tambah.php" class="add-link">+ TAMBAH MAHASISWA</a>
        <table>
            <thead>
                <tr>
                    <th>Kode Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php'; // Menyambungkan ke database
                $query = "SELECT * FROM mahasiswa"; // Query untuk mengambil semua data
                $result = mysqli_query($koneksi, $query);

                // Looping untuk menampilkan data
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['kode_mahasiswa']; ?></td>
                        <td><?php echo $data['nama_mahasiswa']; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['jurusan']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td class="action-links">
                            <a href="edit.php?kode=<?php echo $data['kode_mahasiswa']; ?>">UPDATE</a>
                            <a href="hapus.php?kode=<?php echo $data['kode_mahasiswa']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">DELETE</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>