<?php
include '../pertemuanke9/koneksi.php';

if (isset($_GET['kode'])) {
    header ('Location:tampil_data.php?pesan=delete');
}
$kode = $_GET['kode'];

$sql ="DELETE FROM barang where kode_barang='$kode'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('Location:tampil_data.php?pesan= delete');
}else {
    echo "data gagal dihapus";
}