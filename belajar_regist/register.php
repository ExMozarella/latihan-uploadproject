
<?php
//areaphp
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username','$password','$nama')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Akhirnya');
        window.location='login.php';</script>";
    } else {
        echo "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class ="conlog">
    <h2>Form Registrasi</h2>
    <form method="POST">
        <fieldset>
            <table>

                <tr>
                    <td>
                        <label for="nama_lengkap">Masukkan Nama</label>
                    </td>

                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Masukkan Username</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Username" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Masukkan Password</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Password" required><br>
                    </td>
                </tr>
            </table>
            <!-- bagian button -->


        </fieldset>
    </form>
        <button type="submit" name="register">Daftar</button>
        <p>Create Account |<a href="login.php">Login di sini</a></p>
</div>
</body>
</html>