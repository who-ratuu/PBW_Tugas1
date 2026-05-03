<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM pengguna WHERE nama=? AND katasandi=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $username;

    header("Location: index.php");
} else {
    header("Location: login.php?message=Login gagal");
}
?>