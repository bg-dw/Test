<?php
$nama = $alamat = $telp = $gen = "";

$nama = input($_POST["nama"]);
$alamat = input($_POST["alamat"]);
$telp = input($_POST["telp"]);
$gen = input($_POST["gen"]);

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$err_n = $err_t = $err_all = "";
if ($nama == "" || $alamat == "" || $telp == "" || $gen == "") {
    echo $err_all = 'Harap Lengkapi form!';
} elseif (ctype_alpha(str_replace(' ', '', $nama)) === false) {
    echo $err_n = 'Nama Harus Huruf';
} elseif (is_numeric($telp) == false) {
    echo $err_t = 'Telepon hanya nomor';
} else {
    echo "<h2>Isi Data:</h2>";
    echo $nama;
    echo "<br>";
    echo $alamat;
    echo "<br>";
    echo $telp;
    echo "<br>";
    echo $gen;
}
?>
