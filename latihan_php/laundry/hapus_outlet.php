<?php
if ($_GET['id']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($connection, "delete from daftar_outlet where id='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus outlet');location.href='read_outlet.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus outlet');location.href='read_outlet.php';</script>";
    }
}