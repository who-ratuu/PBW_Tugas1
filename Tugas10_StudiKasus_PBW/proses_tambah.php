<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $harga   = $_POST['harga'];

    $stmt = $conn->prepare(
        "INSERT INTO buku (judul, penulis, harga) VALUES (?, ?, ?)"
    );

    $stmt->bind_param("ssi", $judul, $penulis, $harga);

    $stmt->execute();
}
?>