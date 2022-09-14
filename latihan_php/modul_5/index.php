<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location:beranda.php");
}
include("function.php");
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
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "wrong") {
            echo "<h3>Username dan Password salah!</h3>";
        }
    }
    if (isset($_GET["notif"])) {
        if ($_GET["notif"] == "logout") {
            echo "<h3>Berhasil Logout</h3>";
        }
    }
    if (isset($_POST["submit"])) {
        echo do_login($_POST["username"], $_POST["password"]);
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];   ?>" method="post">
        Username: <input type="text" name="username"><br />
        Password: <input type="password" name="password"><br />
        <input type="submit" name="submit" value="SIGN IN">
    </form>
</body>

</html>