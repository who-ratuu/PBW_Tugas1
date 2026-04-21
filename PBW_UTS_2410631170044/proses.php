<?php
define("PAJAK", 0.15);

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$barang = isset($_POST['barang']) ? $_POST['barang'] : [];

$harga = [
    "pulpen" => 2000,
    "buku" => 5000,
    "penghapus" => 1000
];

$jumlah = [
    "pulpen" => $_POST['jumlah_pulpen'] ?? 0,
    "buku" => $_POST['jumlah_buku'] ?? 0,
    "penghapus" => $_POST['jumlah_penghapus'] ?? 0
];

$subtotal = 0;

foreach ($barang as $item) {
    $subtotal += $harga[$item] * $jumlah[$item];
}

$pajak = $subtotal * PAJAK;

if ($layanan == "reguler") {
    $biaya_layanan = 0;
} elseif ($layanan == "prioritas") {
    $biaya_layanan = 5000;
} else {
    $biaya_layanan = 0;
}

$total = $subtotal + $pajak + $biaya_layanan;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pemesanan</title>
</head>
<body>

<h2>Ringkasan Pemesanan</h2>

<?php if (empty($barang)) { ?>
    <p><b>Tidak ada barang dipilih!</b></p>
<?php } else { ?>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <th>NIM</th>
        <td><?= $nim ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <th>Layanan</th>
        <td><?= $layanan ?></td>
    </tr>
    <tr>
        <th>Item Dipilih</th>
        <td>
            <?php
            foreach ($barang as $item) {
                echo $item . " (" . $jumlah[$item] . ")<br>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Subtotal</th>
        <td>Rp <?= $subtotal ?></td>
    </tr>
    <tr>
        <th>Pajak (15%)</th>
        <td>Rp <?= $pajak ?></td>
    </tr>
    <tr>
        <th>Biaya Layanan</th>
        <td>Rp <?= $biaya_layanan ?></td>
    </tr>
    <tr>
        <th>Total</th>
        <td><b>Rp <?= $total ?></b></td>
    </tr>
</table>

<?php } ?>

</body>
</html>