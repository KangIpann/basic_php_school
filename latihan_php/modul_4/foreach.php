<?php
echo "---For Loop--- <br/>";
$buah = array("Jambu", "Jeruk", "Apel", "Stroberri", "Lemon");
for ($i = 0; $i < sizeof($buah); $i++) {
    echo "Index ke $i = " . $buah[$i] . "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "---For Each--- <br/>";
foreach ($buah as $namabuah) {
    echo $namabuah . "<br>";
}