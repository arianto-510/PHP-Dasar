<?php 

// Buat Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "belajar");

// Membuat pengkondisian jika koneksi gagal berhasil/gagal
if (!$conn) {
    echo "Koneksi Gagal". mysqli_connect_error();
}else{
    echo "Koneksi Berhasil";
}
