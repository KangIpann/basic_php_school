<?php
include '../connect.php';
$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Matakuliah</h1>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>--
                    <p>Kode: </p>
                </td>
                <td><input type="input" name="kode"></td>

            </tr>
            <tr>
                <td>
                    <p>Nama Matakuliah: </p>
                </td>
                <td><input type="input" name="nama_matkul"></td>
            </tr>
            <tr>
                <td>
                    <p>SKS: </p>
                </td>
                <td><input type="input" name="sks"></td>
            </tr>
            <tr>
                <td>
                    <p>Semester: </p>
                </td>
                <td><input type="input" name="semester"></td>
            </tr>
            <tr>
                <td>
                    <p>Dosen Pengajar: </p>
                </td>
                <td><select name="id_dosen" id="nama_dosen">
                        <option value="id_dosen">--Pilih Salah Satu--</option>
                        <?php
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $data['id_dosen'] ?>"> <?php echo $data['nama_dosen'] ?></option>"
                        <?php
                        }

                        ?>
                    </select></td>
            </tr>
            <tr colspan="">
                <td></td>
                <td><button type="submit" name="btnSimpan">Simpan</button></td>
            </tr>
        </table>



    </form>
</body>

</html>