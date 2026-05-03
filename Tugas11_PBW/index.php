<?php
session_start();

if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login terlebih dahulu"));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2 class="mb-3">Dashboard</h2>

    <div class="alert alert-info">
        Selamat datang, <b>Admin!</b>
    </div>

    <div class="card" style="width: 400px;">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>Ratu Bilqis Febriyani</td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td>2410631170044</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>4C Informatika</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>Informatika</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>Ilmu Komputer</td>
                </tr>
            </table>
        </div>
    </div>

    <br>

    <a href="logout.php" class="btn btn-danger">Logout</a>

</body>
</html>