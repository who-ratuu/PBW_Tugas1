<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama_hewan'];
    $jenis = $_POST['jenis'];
    $pemilik = $_POST['pemilik'];
    $keluhan = $_POST['keluhan'];
    $tanggal = $_POST['tanggal'];

    $stmt = $conn->prepare("INSERT INTO pasien_hewan (nama_hewan, jenis, pemilik, keluhan, tanggal) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $jenis, $pemilik, $keluhan, $tanggal);

    if($stmt->execute()){
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Tambah Data</h2>

<form method="POST">

<input type="text" name="nama_hewan" class="form-control mb-2" placeholder="Nama Hewan">
<input type="text" name="jenis" class="form-control mb-2" placeholder="Jenis">
<input type="text" name="pemilik" class="form-control mb-2" placeholder="Pemilik">
<input type="text" name="keluhan" class="form-control mb-2" placeholder="Keluhan">
<input type="date" name="tanggal" class="form-control mb-2">

<button class="btn btn-primary">Simpan</button>

</form>

</body>
</html>