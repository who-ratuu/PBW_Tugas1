<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pasien_hewan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klinik Hewan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>🐾 Data Pasien Klinik Hewan 🐾</h2>

<?php
if(isset($_GET['status'])){
    if($_GET['status']=="sukses"){
        echo "<p style='color:green; text-align:center;'>Data berhasil!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Data gagal!</p>";
    }
}
?>

<div style="text-align:center;">
<a href="tambah.php">+ Tambah Data</a>
</div>

<table>
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
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>