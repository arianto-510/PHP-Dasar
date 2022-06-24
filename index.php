<?php
require 'functions.php';

$buku = query("SELECT * FROM buku");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>

<body>
    <h2>Koleksi Buku</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($buku as $bk) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $bk['gambar']; ?>" height="80"></td>
                <td><?= $bk['judul']; ?></td>
                <td><a style="color: blue; text-decoration: none;" href="detail.php?id=<?= $bk['id']; ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>