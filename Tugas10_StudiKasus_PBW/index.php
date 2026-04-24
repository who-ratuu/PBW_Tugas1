<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Buku</h2>

<div style="text-align:center; margin-bottom:10px;">
    <a href="tambah.php">+ Tambah Buku</a>
</div>

<table>
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun Terbit</th>
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
        <a href="edit.php?id=<?= $row['ID']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $row['ID']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>