<?php
//Tanpa Parameter
function ucapan()
{
    echo "SELAMAT DATANG DI SMK TELKOM MALANG";
    echo "<br>";
    echo "Siapa suruh masuk telkom";
}
//Dengan Parameter
function bioData($nama, $alamat, $nomor, $kelas)
{
    echo "Profil Kamu";
    echo "<br>";
    echo "Nama: " . $nama;
    echo "<br>";
    echo "Alamat: " . $alamat;
    echo "<br>";
    echo "Nomor Telp: " . $nomor;
    echo "<br>";
    echo "Kelas: " . $kelas;
    echo "<br>";
}
//tanpa Parameter dan return
function head()
{
    echo "<link rel='stylesheet' type='text/css' href='style/style.css' />";
    echo "<link rel='stylesheet' type='text/css' href='style/font-awesome.css'> ";
}

echo head();
ucapan();
echo "<hr>";

$nama = "Arialdo Rivandi Tion Saputra";
$alamat = "Malang";
$nomor = "085155225890";
$kelas = "XI RPL 3";
bioData($nama, $alamat, $nomor, $kelas);
echo "<br>";
bioData("Saipudin", "Jakarta", "0866666666", "YNTKTS");