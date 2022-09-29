<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Daftarkan Outlet</h3>
    <form action="tambah_outlet.php" method="post">
        Nama Outlet :
        <input type="text" name="nama" value="" class="form-control">
        Alamat :
        <textarea name="alamat" value="" class="form-control"> </textarea>
        Nomor Telepon :
        <input name="no_telp" type="text" class="form-control">
        </input>
        <input type="submit" name="simpan" value="Daftarkan Outlet" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    if (empty($nama)) {
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($no_telp)) {
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($connection, "insert into daftar_outlet (nama,alamat,no_telp) value ('" . $nama . "','" . $alamat . "','" . $no_telp . "')") or die(mysqli_error($connection));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan outlet');location.href='read_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan outlet');location.href='tambah_outlet.php';</script>";
        }
    }
}
?>

</html>