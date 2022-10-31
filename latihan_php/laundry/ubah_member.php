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
    // echo "$_GET['id']";
    if ($_GET) {
        $qry_get_siswa = mysqli_query($connection, "select * from member where id = '" . $_GET['id'] . "'");
        $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Member</h3>
    <form action="ubah_member.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_siswa['id'] ?>">
        Nama :
        <input type="text" name="nama" value="<?= $dt_siswa['nama'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" value="<?= $dt_siswa['alamat'] ?>"
            class="form-control"><?= $dt_siswa['alamat'] ?></textarea>
        Jenis Kelamin: <br>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        Nomor Telepon :
        <input name="tlp" type="text" class="form-control" value="<?= $dt_siswa['tlp'] ?>">
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>



<?php
    }
    if ($_POST) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tlp = $_POST['tlp'];
        if (empty($nama)) {
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_member.php';</script>";
        } elseif (empty($alamat)) {
            echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_member.php';</script>";
        } elseif (empty($jenis_kelamin)) {
            echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='ubah_member.php';</script>";
        } elseif (empty($tlp)) {
            echo "<script>alert('nomor telepon tidak boleh kosong');location.href='ubah_member.php';</script>";
        } else {
            include "koneksi.php";
            $update = mysqli_query($connection, "update member set nama='" . $nama . "',alamat ='" . $alamat . "',jenis_kelamin='" . $jenis_kelamin . "',tlp='" . $tlp .  "' where id = '" . $id . "'") or die(mysqli_error($connection));
            if ($update) {
                echo "<script>alert('Sukses update member');location.href='read_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=" . $id . "';</script>";
            }
        }
    }
?>

</html>