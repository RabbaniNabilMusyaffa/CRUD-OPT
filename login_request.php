<?php

session_start();

include "conn.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$error = "Username atau password salah.<br> <a href='index.php'>Silahkan coba lagi</a>";

$sql = "SELECT * FROM siswa WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);
$show = mysqli_fetch_array($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['id'] = $show['id'];
    header("Location: detail.php");
} else {
    echo $error;
}


?>