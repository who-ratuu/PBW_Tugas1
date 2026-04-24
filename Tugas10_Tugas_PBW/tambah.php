<?php
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Data</h2>

<form method="POST">
    Nama Hewan <input type="text" name="nama_hewan">
    Jenis <input type="text" name="jenis">
    Pemilik <input type="text" name="pemilik">
    Keluhan <input type="text" name="keluhan">
    Tanggal <input type="date" name="tanggal">
    <button name="simpan">Simpan</button>
</form>

</body>
</html>