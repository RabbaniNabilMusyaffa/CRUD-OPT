<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Data || User</title>
    <link rel="stylesheet" href="CSS/detail.css">
    <link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">

</head>

<body>
    <nav>
        <div class="navbar-title">Halaman Data Siswa</div>
        <div class="navbar-buttons">
            <a class="btnCreate" href="create.php">Tambah Data Siswa</a>
            <a class="btnLogout" href="logout.php">Log out</a>
        </div>
    </nav>
    <table border="1" bordercolor="silver" cellpadding="10" colspan="3">
        <thead rowspan="4">
            <th rowspan="4">No</th>
            <th rowspan="4">Id</th>
            <th rowspan="4">Username</th>
            <!-- <th hidden rowspan="4">Password</th> -->
            <th rowspan="4">Foto</th>
            <th rowspan="4" colspan="2">Aksi</th>
        </thead>
        <?php
        include "sessionCheck.php";
        include "conn.php";
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM siswa");
        while ($fetch = mysqli_fetch_array($data)) { ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $fetch['id']; ?>
                </td>
                <td class="nama">
                    <a class="nameLink" href="detailSiswa.php?id=<?= $fetch['id']; ?>"><?= $fetch['username']; ?></a>
                </td>
                <td hidden>
                    <?= $fetch['password']; ?>
                </td>

                <td align="center"><img class="foto" src="foto/<?= $fetch['foto']; ?>" alt="<?= $fetch['foto'] ?>">
                </td>
                <td name="edit" align="center"><a class="edit" href="update.php?id=<?php echo $fetch['id']; ?>">EDIT</a>
                </td>
                <td name="hapus" value="hapus" align="center"><a class="delete"
                        onclick="return confirm('Apa anda sudah yakin?, data akan dihapus permanen')"
                        href="delete.php?id=<?php echo $fetch['id']; ?>">DELETE</a>
                </td>
            </tr>

        <?php } ?>


    </table>
</body>

</html>