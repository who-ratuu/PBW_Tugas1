<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pasien_hewan WHERE id=$id");
$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){
    $nama = $_POST['nama_hewan'];
    $jenis = $_POST['jenis'];
    $pemilik = $_POST['pemilik'];
    $keluhan = $_POST['keluhan'];
    $tanggal = $_POST['tanggal'];

    $stmt = $conn->prepare("UPDATE pasien_hewan SET nama_hewan=?, jenis=?, pemilik=?, keluhan=?, tanggal=? WHERE id=?");
    $stmt->bind_param("sssssi", $nama, $jenis, $pemilik, $keluhan, $tanggal, $id);

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
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Edit Data</h2>

<form method="POST">

<input type="text" name="nama_hewan" value="<?= $d['nama_hewan']; ?>" class="form-control mb-2">
<input type="text" name="jenis" value="<?= $d['jenis']; ?>" class="form-control mb-2">
<input type="text" name="pemilik" value="<?= $d['pemilik']; ?>" class="form-control mb-2">
<input type="text" name="keluhan" value="<?= $d['keluhan']; ?>" class="form-control mb-2">
<input type="date" name="tanggal" value="<?= $d['tanggal']; ?>" class="form-control mb-2">

<button class="btn btn-success">Update</button>

</form>

</body>
</html>