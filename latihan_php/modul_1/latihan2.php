<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        $nama = "Ivan";
        function tampil_nama()
        {
            global $nama;
            echo "Nama Saya $nama";
        }

        echo "Selamat Datang $nama di SMK Telkom Sandhy Putra Malang";
        echo "<br/>";
        echo "Siapa namanya? Dimana rumahnya?";
        echo "<br/>";
        tampil_nama();
        ?>
    </p>
</body>

</html>