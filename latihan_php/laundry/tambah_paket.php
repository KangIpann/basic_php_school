<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Daftarkan Outlet</h3>
    <form action="tambah_paket.php" method="post">
        Nama :
        <input type="text" name="nama_pemilik" value="" class="form-control">
        Jenis : <br>
        <select name="jenis">
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
        </select>
        <br>
        Harga :
        <input name="harga" type="text" class="form-control">
        </input>
        <input type="submit" name="simpan" value="Tambahkan Paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $nama = $_POST['nama_pemilik'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($jenis)) {
        echo "<script>alert('jenis paket tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif (empty($harga)) {
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($connection, "insert into paket (nama_pemilik,jenis,harga) value ('" . $nama . "','" . $jenis . "','" . $harga . "')") or die(mysqli_error($connection));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan paket');location.href='read_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
        }
    }
}
?>

</html>