<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link rel="stylesheet" href="CSS/detailSiswa.css">
    <link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">
</head>

<body>

    <nav>
        <div class="navbar-title">Detail Data Siswa</div>
        <div class="navbar-buttons">
            <a class="btnLogout" href="detail.php">Kembali</a>
        </div>
    </nav>

    <?php
    include "conn.php";
    $data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$_GET[id]'");
    while ($fetch = mysqli_fetch_array($data)) { ?>

        <form>
            <label style="margin-top: 40px;" for="foto">Foto:</label>
            <img name="foto" class="foto" style="max-width: 200px; border-radius: 20px;" src="foto/<?= $fetch['foto'] ?>"
                alt="foto/<?= $fetch['foto'] ?>">

            <label style="margin-top: 10px;" for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?= $fetch['username'] ?>">

            <label style="margin-top: 10px;" for="id">ID:</label>
            <input type="text" id="id" name="id" value="<?= $fetch['id'] ?>">

            <label style="margin-top: 10px;" for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?= $fetch['password'] ?>">

        <?php } ?>

    </form>



</body>

</html>