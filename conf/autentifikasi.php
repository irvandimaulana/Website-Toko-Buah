<?php
session_start();
include ('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query ($koneksi, "SELECT * FROM tb_user WHERE username='$username'
AND password='$password'");
if (mysqli_num_rows($query)==1) {
    header('location:../app');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['fullname'];
    $_SESSION['level'] = $user['level'];
    //login berhasil
} else if($username=='' || $password=='') {
    header('location:../index.php?error=2');
    //masukan usn dan pass
} else {
    header('location:../index.php?error=1');
    //login gagal
}


?>