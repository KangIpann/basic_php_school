<?php
session_start();
include("function.php");
echo check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Selamat Datang!</h1>
    <h3><a href=profil.php>Edit Profil</a></h3>
    <h3><a href=logout.php>Logout!</a></h3>
</body>

</html>