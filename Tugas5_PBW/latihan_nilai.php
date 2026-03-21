<?php
$nama = "";
$nilai = "";
$predikat = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } elseif ($nilai >= 0) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    // Status kelulusan
    if ($nilai >= 65) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
    <h2>Input Nilai Mahasiswa</h2>
    <form method="post">
        Nama:
        <input type="text" name="nama" required>

        Nilai:
        <input type="number" name="nilai" min="0" max="100" required>

        <button type="submit">Proses</button>
    </form>

    <?php if ($nama != "" && $nilai != ""): ?>
        <div class="result">
            <p><b>Nama:</b> <?php echo $nama; ?></p>
            <p><b>Nilai:</b> <?php echo $nilai; ?></p>
            <p><b>Predikat:</b> <?php echo $predikat; ?></p>
            <p><b>Status:</b> <?php echo $status; ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>