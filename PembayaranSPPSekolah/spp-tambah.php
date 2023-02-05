<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_spp');

if (!$koneksi) {
    echo "<h1>Database tidak terhubung...</h1>";
    exit();
}

session_start();

$level = $_SESSION['level'];
$nama = $_SESSION['nama'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PETUGAS</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<!-- This is Header -->
<?php
include "header.php";
?>
<br>
<div class="container">
    <h1 class="mt-5">Input SPP</h1>
    <form action="spp-simpan.php" method="post">
        <table>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><input type="text" name="tahun" id="" autofocus required autocomplete="off" placeholder="Masukan Tahun" class="form-control"></td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td>:</td>
                <td><input type="text" name="nominal" id="" autofocus required autocomplete="off" placeholder="Masukan nominal" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" class="btn btn-success"> <a href="spp.php" class="btn btn-secondary">Cancel</a></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>