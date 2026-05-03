<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php?message=" . urlencode("Silakan login terlebih dahulu"));
    exit;
}

include 'koneksi.php';
$result = $conn->query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Data Buku</h2>

<div class="alert alert-info">
    Selamat datang, <b><?= $_SESSION['nama']; ?></b>
</div>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Buku</a>
<a href="logout.php" class="btn btn-danger mb-3">Logout</a>

<table class="table table-bordered">
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['Judul']; ?></td>
    <td><?= $row['Penulis']; ?></td>
    <td><?= $row['Tahun_Terbit']; ?></td>
    <td><?= $row['Harga']; ?></td>
    <td><?= $row['Stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>