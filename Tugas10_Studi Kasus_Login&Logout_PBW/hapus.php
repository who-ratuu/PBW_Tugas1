<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM buku WHERE ID=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
?>