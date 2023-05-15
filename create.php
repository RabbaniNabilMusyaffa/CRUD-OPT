<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/create.css">
</head>

<body>

    <nav>
        <div class="navbar-title">Tambah Data Siswa</div>
        <div class="navbar-buttons">
            <a class="btnLogout" href="detail.php">Kembali</a>
        </div>
    </nav>

    <div class="container" style="margin-top: 70px;">
        <?php include "conn.php"; ?>
        <h1>Tambah data siswa</h1>
        <p style="text-align: center; font-family: Arial, sans-serif;">Isikan semua data dengan benar, lalu tekan simpan
        </p>

        <form action="action_create.php" method="post" enctype="multipart/form-data">

            <table align="center">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" required></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" required></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="foto" required></td>
                </tr>


            </table>

            <br>
            <input onclick="return confirm('Apa anda sudah yakin?')" type="submit" value="SIMPAN" name="simpan"
                width="100%">

        </form>
    </div>

</body>

</html>