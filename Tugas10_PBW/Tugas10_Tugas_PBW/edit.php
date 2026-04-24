<?php
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Data</h2>

<form method="POST">
    Nama Hewan <input type="text" name="nama_hewan" value="<?= $d['nama_hewan']; ?>">
    Jenis <input type="text" name="jenis" value="<?= $d['jenis']; ?>">
    Pemilik <input type="text" name="pemilik" value="<?= $d['pemilik']; ?>">
    Keluhan <input type="text" name="keluhan" value="<?= $d['keluhan']; ?>">
    Tanggal <input type="date" name="tanggal" value="<?= $d['tanggal']; ?>">
    <button name="update">Update</button>
</form>

</body>
</html>