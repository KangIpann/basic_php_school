<?php
if ($_GET['id']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($connection, "delete from paket where id='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus paket');location.href='read_paket.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus paket');location.href='read_paket.php';</script>";
    }
}