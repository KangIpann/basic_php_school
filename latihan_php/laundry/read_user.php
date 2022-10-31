<?php
include "header.php";

?>
<h2>Daftar User </h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama </th>
            <th>Username</th>
            <th>Role</th>
            <?php
            if ($_SESSION['role'] != 'kasir') { ?>
            <th>Aksi</th>
            <?php
            } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $qry_siswa = mysqli_query($connection, "select * from user");
        $no = 0;
        while ($data_siswa = mysqli_fetch_array($qry_siswa)) {
            $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data_siswa['nama'] ?></td>
            <td><?= $data_siswa['username'] ?></td>
            <td><?= $data_siswa['role'] ?></td>
            <?php
                if ($_SESSION['role'] != 'kasir') { ?>
            <td><a href="ubah_user.php?id=<?= $data_siswa['id'] ?>" class="btn btn-success">Ubah</a> |
                <a href="hapus_user.php?id=<?= $data_siswa['id'] ?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>

        </tr>

        <?php
                } ?>

        <?php
        }
    ?>
    </tbody>
</table>
<?php
if ($_SESSION['role'] != 'kasir') { ?>
<a href="tambah_user.php" class="btn btn-primary">Daftarkan User</a>
<?php

} ?>

<?php
include "footer.php";
?>