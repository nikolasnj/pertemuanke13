<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Data barang</title>
</head>
<body>
<?php
include '../pertemuanke9/koneksi.php';
// syntax untuk menapilkan data 
if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $sql = "SELECT * FROM barang WHERE kode_barang ='$keyword' OR nama_barang like '%$keyword%'";
}else {
    $sql = "SELECT * FROM barang";
}

$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_all($query, MYSQLI_BOTH);
?>

<h1 class="w3-margin-bottom">Tabel Data Barang </h1> 
 <?php
if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
    if ($pesan == 'tambah'){
        echo "data berhasil di tambah";
    } elseif ($pesan == 'update') {
       echo "data berhasil di update";
    }elseif ($pesan == 'delete') {
        echo "data berhasil di hapus";
    }elseif ($pesan == 'edit') {
        echo "data berhasil di edit";
      }
}
?>  
<form action=""method="post">
    <label for="cari">cari</label>
    <input type="text"name="keyword" id="cari"autofokus autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>

<table class="w3-table-all w3-centered">
    <tr>
        <td>Kode Barang</td>
        <td>Nama Barang</td>
        <td>Harga</td>
        <td>Stok</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($row as $baris) { ?>
    <tr>
        <td><?= $baris ['kode_barang'] ?></td>
        <td><?= $baris ['nama_barang'] ?></td>
        <td><?= $baris ['harga_barang'] ?></td>
        <td><?= $baris ['stok_barang'] ?></td>
        <td>
            <a href="Edit.php?kode=<?=$baris['kode_barang'] ?>"><button class="w3-button w3-dark-gray w3-round-xlarge">Edit</button></a>

            <a href="delete.php?kode=<?=$baris['kode_barang'] ?>" onclick="return confirm('yakin ingin dihapus')"><button class="w3-button w3-dark-gray w3-round-xlarge">delete</button></a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<a href="tambah_data.php"><button class="w3-button w3-dark-gray w3-round-xlarge">Tamabah Data</button></a>
<a href="logout.php">logout</a>

</body>
</html>