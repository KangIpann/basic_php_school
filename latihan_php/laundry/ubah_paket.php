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
    $qry_get_siswa = mysqli_query($connection, "select * from paket where id = '" . $_GET['id'] . "'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Paket</h3>
    <form action="ubah_paket.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_siswa['id'] ?>">
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
    $id = $_POST['id'];
    $nama = $_POST['nama_pemilik'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    if (empty($nama)) {
        echo "<script>alert('nama paket tidak boleh kosong');location.href='ubah_paket.php';</script>";
    } elseif (empty($jenis)) {
        echo "<script>alert('jenis tidak boleh kosong');location.href='ubah_paket.php';</script>";
    } elseif (empty($harga)) {
        echo "<script>alert('harga telepon tidak boleh kosong');location.href='ubah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $update = mysqli_query($connection, "update paket set nama_pemilik='" . $nama . "',jenis='" . $jenis . "', harga='" . $harga . "' where id = '" . $id . "'") or die(mysqli_error($connection));
        if ($update) {
            echo "<script>alert('Sukses update outlet');location.href='read_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal update outlet');location.href='ubah_paket.php?id=" . $id . "';</script>";
        }
    }
}
?>

</html>