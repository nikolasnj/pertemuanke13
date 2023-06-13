<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Form Tambah Data</title>
</head>
<body>
<div class="w3-display-topmiddle">
    <?php
   echo $_GET['pesan'];
    ?>
<H1>FORM TAMBAH DATA</H1>

<form action="proses-tambahdata.php" method="post">
            <label for="">kode barang: </label>
            <input type="text" name= "kode" id="">
            <br>
            <label for="">nama barang:</label>
            <input type="text" name= "nama" id="">
            <br>
            <label for="">harga:</label>
            <input type="text" name= "harga" id="">
            <br>
            <label for="">stok:</label>
            <input type="text" name= "stok" id="">
            <input type="submit" name= "submit" id="simpan"> 
</form>
</div>

</body>
</html>