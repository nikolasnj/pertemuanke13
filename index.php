<?php
session_start();
if ($_SESSION['status'] == 'login') {
    header('location:tampil_data.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Silahkan login </h1>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text"name="username" placeholder="username"></td>
            </tr>
               <tr>
                <td>password</td> 
                <td>:</td> 
                <td>
                <input type="password"name="password" placeholder="Password">
                </td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Login</button>
                    <button type="reset">Batal</button>
                </td>
</tr>
        </table>
    </form>
</body>
</html>