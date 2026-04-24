<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM buku WHERE ID=?");
$stmt->bind_param("i", $id);

$stmt->execute();

echo "Data berhasil dihapus!";
?>