
<?php
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];


    $nama = $_POST['nama_lengkap']; // Menangkap nama lengkap dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password


    // Simpan data ke database
    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username','$password','$nama')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);


    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama_lengkap">Masukkan Nama :</label>
                </td>
                <td>
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Masukkan Username :</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username" required><br>
                </td>                
            </tr>
        </table>
       
       
        <label for="password">Masukkan Password</label>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Daftar</button>
    </form>
    <p>Create Account |<a href="login.php">Login di sini</a></p>
</body>
</html>