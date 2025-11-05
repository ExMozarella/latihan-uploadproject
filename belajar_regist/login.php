<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- berikan pengelompokan -->
<div class ="conlog">
    <h2>Login</h2>
    <!-- form table -->
    <form method="POST">
        <table>
            <!-- area input username -->
            <tr>
                <td>
                    <label for="username">Masukkan Username : </label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username" required><br>
                </td>
            </tr>

            <!-- area input password -->
            <tr>
                <td>
                    <label for="password">Masukkan Password : </label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="Password" required><br>
                </td>
            </tr>

        </table>
    </form>
    <button type="submit" name="login">Login</button>
    <!-- link ke halaman register -->
    <p>Create Account |<a href="register.php"> Daftar di sini</a></p>
</body>
</html>