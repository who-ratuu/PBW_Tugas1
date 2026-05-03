<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php?message=" . urlencode("Silakan login terlebih dahulu"));
    exit;
}

include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pasien_hewan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klinik Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Data Pasien Klinik Hewan</h2>

<div class="alert alert-info">
    Selamat datang, <b><?= $_SESSION['nama']; ?></b>
</div>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>
<a href="logout.php" class="btn btn-danger mb-3 ms-2">Logout</a>

<?php if(isset($_GET['status'])): ?>
<div class="alert alert-info">
    <?= ($_GET['status'] == 'sukses') ? 'Data berhasil!' : 'Data gagal!' ?>
</div>
<?php endif; ?>

<table class="table table-striped table-bordered">
<tr>
    <th>Nama Hewan</th>
    <th>Jenis</th>
    <th>Pemilik</th>
    <th>Keluhan</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $row['nama_hewan']; ?></td>
    <td><?= $row['jenis']; ?></td>
    <td><?= $row['pemilik']; ?></td>
    <td><?= $row['keluhan']; ?></td>
    <td><?= $row['tanggal']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>