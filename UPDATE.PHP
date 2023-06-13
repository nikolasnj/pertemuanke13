<?php
include '../pertemuanke9/koneksi.php';
if (isset($_GET['kode'])) {
    header ('Location:tampil_data.php');
}
$kode = $_POST['kode']; 
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE barang SET nama_barang='$nama', harga_barang=$harga, stok_barang=$stok where kode_barang='$kode'";
$querry = mysqli_query($koneksi, $sql);

if($querry){
    header('Location:tampil_data.php?pesan=update');
}else {
    echo "data gagal diupdate";
}