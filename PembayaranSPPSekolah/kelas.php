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
<body class="container-fluid">
    <!-- This is Header -->
    <?php
    include "header.php";
    ?>
    <br>
    <div class="container">
        <div class="text-center">
            <h1 class="mt-5">Rekaptulasi Kelas</h1>  
        </div>
        <a href="kelas-tambah.php" class="btn btn-success">+ Tambah Kelas</a>
        <br><br>
        <table border="1" width="100%" class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th class="text-center">Aksi</th>
            </tr>
            <?php
            $no = 1;
            $sql = "SELECT * FROM tb_kelas";
            $query = mysqli_query($koneksi, $sql);
            while ($data = mysqli_fetch_array($query)) {?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama_kelas']; ?></td>
                    <td><?= $data['wali_kelas']; ?></td>
                    <td><?= $data['kompetensi_keahlian']; ?></td>
                    <td class="text-center"><a href="kelas-edit.php?id_kelas=<?= $data['id_kelas']; ?>" class="btn btn-warning">Edit</a> <a href="kelas-hapus.php?id_kelas=<?= $data['id_kelas']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
            } ?>
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="text-center" style="background-color: black;">
        <p class="text-white p-3">&copy; Copyright 2023 by D.E.Y.Y. Project</p>
    </footer>
</body>
</html>