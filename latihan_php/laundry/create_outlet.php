<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];

$query = "INSERT INTO daftar_outlet (nama,alamat,no_telp) VALUES ('$nama', '$alamat', '$telp')";
$result = mysqli_query($connection, $query);

$num = mysqli_affected_rows($connection);

if ($num > 0) {
    echo "Berhasil tambah data";
} else {
    echo "Gagal tambah data";
}
echo "<br/>";
echo "<a href='read.php'>Lihat Data</a>";