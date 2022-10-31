<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_siswa = mysqli_query($connection, "select * from user where id = '" . $_GET['id'] . "'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Paket</h3>
    <form action="ubah_user.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_siswa['id'] ?>">
        Nama :
        <input type="text" name="nama" value="<?= $dt_siswa['nama'] ?>" class="form-control">
        Username :
        <input name="username" type="text" value="<?= $dt_siswa['username'] ?>" class="form-control">
        Password :
        <input name="password" type="password" value="<?= $dt_siswa['password'] ?>" class="form-control">
        Role : <br>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
        </select>
        <br>
        <input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $id = $_POST['id'];
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
        $update = mysqli_query($connection, "update user set nama='" . $nama . "',username='" . $username . "', password='" . $password . "',username='" . $username . "', role='" . $role . "' where id = '" . $id . "'") or die(mysqli_error($connection));
        if ($update) {
            echo "<script>alert('Sukses update user');location.href='read_user.php';</script>";
        } else {
            echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=" . $id . "';</script>";
        }
    }
}
?>

</html>