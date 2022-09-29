<?php
session_start();
include '../connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username == "" || $password == "") {
    header("location: form-login.php");
} else {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $dt_login = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $username;
        $_SESSION['akses'] = $dt_login['akses'];
        header("location: ../dosen/read.php");
    } else {

        header("location: form-login.php");
    }
}