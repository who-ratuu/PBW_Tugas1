<?php
define("PAJAK", 0.10);

$harga_barang = array(
    "Keyboard" => 150000);

$jumlah_beli = 2;

$total_sebelum_pajak = $harga_barang["Keyboard"] * $jumlah_beli;
$pajak = $total_sebelum_pajak * PAJAK;
$total_bayar = $total_sebelum_pajak + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
<title>Toko Sederhana</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Perhitungan Total Pembelian</h2>

<div class="box">

<?php
echo "<p>Nama Barang : Keyboard</p>";
echo "<p>Harga Satuan : Rp " . $harga_barang["Keyboard"] . "</p>";
echo "<p>Jumlah Beli : " . $jumlah_beli . "</p>";
echo "<p>Total Harga (Sebelum Pajak) : Rp " . $total_sebelum_pajak . "</p>";
echo "<p>Pajak (10%) : Rp " . $pajak . "</p>";
echo "<p class='total'>Total Bayar : Rp " . $total_bayar . "</p>";
?>

</div>

</div>

</body>
</html>