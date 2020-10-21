<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$error = "username / password salah!";

$sql = "select * from login where username='$username'and password='$password'";
$result = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['status'] = 'login';
    header("location:http://localhost/online_shop/index-admin.html?login=berhasil");
} else {
    $_SESSION['error'] = $error;
    header("location:http://localhost/online_shop/login.html?login=gagal");
    echo mysqli_error($connect);
}
