<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM pasien_hewan WHERE id=?");
$stmt->bind_param("i", $id);

if($stmt->execute()){
    header("Location: index.php?status=sukses");
} else {
    header("Location: index.php?status=gagal");
}
?>