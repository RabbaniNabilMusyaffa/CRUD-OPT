<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data</title>
    <link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/update.css">
</head>

<body>

    <nav>
        <div class="navbar-title">Update Data Siswa</div>
        <div class="navbar-buttons">
            <a class="btnLogout" href="detail.php">Kembali</a>
        </div>
    </nav>

    <div class="container" style="margin-top: 70px;">
        <?php
        include "conn.php";
        $data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$_GET[id]'");
        $fetch = mysqli_fetch_array($data);
        ?>
        <h1>Ubah Data Siswa</h1>
        <p style="text-align: center; font-family: Arial, sans-serif;">Isikan semua data dengan benar, lalu tekan simpan
        </p>

        <form action="action_update.php" method="post" enctype="multipart/form-data">

            <table align="center">
                <tr type="hidden">
                    <td><input type="hidden" name="id" value="<?= $fetch['id']; ?>"></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?= $fetch['username']; ?>"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" value="<?= $fetch['password']; ?>"></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="foto" id="foto" /> <span name="old" id="old" value="<?= $fetch['foto'] ?>"><?php echo $fetch['foto'] ?></span></td>
                </tr>


            </table>

            <br>
            <input style="margin: auto; width: 100%;" onclick="return confirm('Apa anda sudah yakin?')" type="submit"
                value="update" name="update" width="100%">

        </form>
    </div>

</body>

</html>