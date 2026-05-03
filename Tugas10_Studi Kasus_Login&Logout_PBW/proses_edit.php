<?php
include 'koneksi.php';

if (isset($_POST['id'])) {

    $id      = $_POST['id'];
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun   = $_POST['tahun'];
    $harga   = $_POST['harga'];
    $stok    = $_POST['stok'];

    $stmt = $conn->prepare("UPDATE buku SET Judul=?, Penulis=?, Tahun_Terbit=?, Harga=?, Stok=? WHERE ID=?");
    $stmt->bind_param("ssiiii", $judul, $penulis, $tahun, $harga, $stok, $id);

    $stmt->execute();

    header("Location: index.php");
}
?>