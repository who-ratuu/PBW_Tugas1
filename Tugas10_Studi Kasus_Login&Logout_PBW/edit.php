<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM buku WHERE ID=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Edit Buku</h2>

<form action="proses_edit.php" method="POST">

<input type="hidden" name="id" value="<?= $data['ID']; ?>">

<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" value="<?= $data['Judul']; ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Penulis</label>
    <input type="text" name="penulis" value="<?= $data['Penulis']; ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Tahun</label>
    <input type="number" name="tahun" value="<?= $data['Tahun_Terbit']; ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" value="<?= $data['Harga']; ?>" class="form-control">
</div>

<div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" value="<?= $data['Stok']; ?>" class="form-control">
</div>

<button class="btn btn-success">Update</button>

</form>

</body>
</html>