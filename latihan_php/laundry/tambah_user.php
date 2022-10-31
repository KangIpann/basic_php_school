<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Daftarkan Outlet</h3>
    <form action="tambah_user.php" method="post">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Username :
        <input name="username" type="text" class="form-control">
        Password :
        <input name="password" type="password" class="form-control">
        Role : <br>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
        </select>
        <br>
        <input type="submit" name="simpan" value="Tambahkan User" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($role)) {
        echo "<script>alert('role tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($connection, "insert into user (nama,username,password,role) value ('" . $nama . "','" . $username . "','" . $password . "','" . $role . "')") or die(mysqli_error($connection));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan user');location.href='read_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='read_user.php';</script>";
        }
    }
}
?>

</html>