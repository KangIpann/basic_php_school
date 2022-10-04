<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Daftarkan Member</h3>
    <form action="tambah_member.php" method="post">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Alamat :
        <textarea name="alamat" value="" class="form-control"> </textarea>
        Jenis Kelamin: <br>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        Nomor Telepon :
        <input name="tlp" type="text" class="form-control">
        <input type="submit" name="simpan" value="Tambahkan Member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif (empty($tlp)) {
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($connection, "insert into member (nama,alamat,jenis_kelamin,tlp) value ('" . $nama . "','" . $alamat . "','" . $jenis_kelamin . "','" . $tlp . "')") or die(mysqli_error($connection));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan member');location.href='read_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>

</html>