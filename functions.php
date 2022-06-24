<?php

function koneksi()
{
    mysqli_connect("localhost", "root", "", "buku");
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
}
