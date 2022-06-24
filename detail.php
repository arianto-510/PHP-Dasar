<?php
require 'functions.php';
$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>
    <h3>Detail Buku</h3>
    <img src="img/<?= $buku['gambar']; ?>" height="80">
    <ol>
        <li>Judul Buku : <b><?= $buku['judul']; ?></b></li>
        <li>Pengarang : <b><?= $buku['pengarang']; ?></b></li>
        <li>Penerbit : <b><?= $buku['penerbit']; ?></b></li>
        <li>Tahun Terbit : <b><?= $buku['tahun']; ?></b></li>
        <li>Kategori : <b><?= $buku['kategori']; ?></b></li>
    </ol>
    <a style="text-decoration: none;" href="edit.php">Edit Buku</a> ||
    <a style="text-decoration: none;" href="hapus.php">Hapus Buku</a>
    <br><br>
    <a style="text-decoration: none; color:blue;" href="index.php">Kembali</a>

</body>

</html>