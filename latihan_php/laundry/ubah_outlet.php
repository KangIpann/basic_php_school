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
    $qry_get_siswa = mysqli_query($connection, "select * from daftar_outlet where id = '" . $_GET['id'] . "'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Outlet</h3>
    <form action="ubah_outlet.php" method="post">
        <input type="hidden" name="id" value="<?= $dt_siswa['id'] ?>">
        Nama outlet :
        <input type="text" name="nama" value="<?= $dt_siswa['nama'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $dt_siswa['alamat'] ?></textarea>
        Nomor Telepon :
        <input type="text" name="no_telp" value="<?= $dt_siswa['no_telp'] ?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
<?php
if ($_POST) {
    $id = $_POST['id'];
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
        $update = mysqli_query($connection, "update daftar_outlet set nama='" . $nama . "',alamat='" . $alamat . "', no_telp='" . $no_telp . "' where id = '" . $id . "'") or die(mysqli_error($connection));
        if ($update) {
            echo "<script>alert('Sukses update siswa');location.href='read_outlet.php';</script>";
        } else {
            echo "<script>alert('Gagal update siswa');location.href='ubah_outlet.php?id_siswa=" . $id . "';</script>";
        }
    }
}
?>

</html>