<?php 
    include '../Pertemuanke9/koneksi.php';

    // if (!isset($_GET['kode'])){
    //     header('Location: tampildata.php');
    // }

    error_reporting(1);
    $kode = htmlspecialchars($_POST['kode']);
    $nama = htmlspecialchars($_POST['nama']);
    $harga = htmlspecialchars($_POST['harga']);
    $stok = htmlspecialchars($_POST['stok']);
    
        $sql = "SELECT * FROM barang";
        $query = mysqli_query($koneksi, $sql);
        $baris = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        if ($row > 0) {
            header('location: tambah_data.php?/pesan=kode $baris[kode_barang] sudah ada');
        }else {
            $sql_insert = "INSERT INTO barang VALUES('$kode', '$nama','$harga', '$stok')";
            $query_insert = mysqli_query($koneksi, $sql_insert);
        
           
    if ($query) {
        header('Location: tampil_data.php?pesan=tambah');
    } else {
        echo "Data Gagal Disimpan";
    }
}

   