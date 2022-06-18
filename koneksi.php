<?php

$conn = mysqli_connect("localhost", "root", "", "kuliah");

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal" . mysqli_connect_error();
} else {
    echo "BErhasil";
}
