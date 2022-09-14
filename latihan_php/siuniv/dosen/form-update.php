<?php
include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "SELECT * FROM dosen WHERE id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
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
    <h1>Ubah Data Dosen</h1>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>
                    <p>Nama Dosen: </p>
                </td>
                <td><input type="input" name="nama_dosen" value="<?php echo $row['nama_dosen']; ?>"></td>

            </tr>
            <tr>
                <td>
                    <p>No. Telepon:</p>
                </td>
                <td><input type="input" name="telp" value="<?php echo $row['telp']; ?>"></td>
            </tr>
            <tr colspan="">
                <td><input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']; ?>"></td>
                <td><button type="submit" name="btnSimpan">Simpan</button></td>
            </tr>
        </table>



    </form>
</body>

</html>