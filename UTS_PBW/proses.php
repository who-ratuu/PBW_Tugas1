<?php
define("PAJAK", 0.15);

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$barang = isset($_POST['barang']) ? $_POST['barang'] : [];

$harga = [
    "Penggaris" => 3000,
    "Pulpen" => 4000,
    "Pensil" => 1000
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