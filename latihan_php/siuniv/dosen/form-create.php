<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Dosen</h1>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>
                    <p>Nama Dosen: </p>
                </td>
                <td><input type="input" name="nama_dosen"></td>

            </tr>
            <tr>
                <td>
                    <p>No. Telepon:</p>
                </td>
                <td><input type="input" name="telp"></td>
            </tr>
            <tr colspan="">
                <td></td>
                <td><button type="submit" name="btnSimpan">Simpan</button></td>
            </tr>
        </table>



    </form>
</body>

</html>