<?php
include '../pertemuanke9/koneksi.php';

$kode = $_GET ['kode'];
$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$querry = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($querry,MYSQLI_BOTH);
$kode = $baris[0];//kode barang 
$nama = $baris[1];//nama barang 
$harga = $baris[2];//harga barang 
$stok = $baris[3]; //stok barang 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Form Edit Data</title>
</head>
<body>
<div class="w3-display-topmiddle">
<H1>FORM EDIT DATA</H1>
<form action="UPDATE.PHP" method="post">
            <label for="">kode barang: </label>
            <input type="text" name= "kode" id="kode" value="<?= $kode?>">
            <br>
            <label for="">nama barang:</label>
            <input type="text" name= "nama" id="nama"value="<?= $nama?>">
            <br>
            <label for="">harga:</label>
            <input type="text" name= "harga" id="harga"value="<?= $harga?>">
            <br>
            <label for="">stok:</label>
            <input type="text" name= "stok" id="stok"value="<?= $stok?>">
            <input type="submit" name= "submit" id="simpan"> 
</form>
</div>
</body>
</html>