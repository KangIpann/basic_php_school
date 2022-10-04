<?php
if ($_GET['id']) {
    include "koneksi.php";
    $qry_hapus = mysqli_query($connection, "delete from member where id='" . $_GET['id'] . "'");
    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus member');location.href='read_member.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus member');location.href='read_member.php';</script>";
    }
}