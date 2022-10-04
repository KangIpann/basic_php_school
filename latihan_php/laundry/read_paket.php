<?php
include "header.php";

?>
<h2>Daftar Paket </h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Pemilik</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $qry_siswa = mysqli_query($connection, "select * from paket");
        $no = 0;
        while ($data_siswa = mysqli_fetch_array($qry_siswa)) {
            $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data_siswa['nama_pemilik'] ?></td>
            <td><?= $data_siswa['jenis'] ?></td>
            <td><?= $data_siswa['harga'] ?></td>
            <td><a href="ubah_paket.php?id=<?= $data_siswa['id'] ?>" class="btn btn-success">Ubah</a> |
                <a href="hapus_paket.php?id=<?= $data_siswa['id'] ?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="tambah_paket.php" class="btn btn-primary">Daftarkan Paket</a>
<?php
include "footer.php";
?>