<?php
include "header.php";

?>
<h2>Daftar Member</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Member</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $qry_siswa = mysqli_query($connection, "select * from member");
        $no = 0;
        while ($data_siswa = mysqli_fetch_array($qry_siswa)) {
            $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data_siswa['nama'] ?></td>
            <td><?= $data_siswa['alamat'] ?></td>
            <td><?= $data_siswa['jenis_kelamin'] ?></td>
            <td><?= $data_siswa['tlp'] ?></td>
            <td><a href="ubah_member.php?id=<?= $data_siswa['id'] ?>" class="btn btn-success">Ubah</a> |
                <a href="hapus_member.php?id=<?= $data_siswa['id'] ?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="tambah_member.php" class="btn btn-primary">Daftarkan Member</a>
<?php
include "footer.php";
?>