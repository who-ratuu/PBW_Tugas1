<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM buku WHERE ID=$id")->fetch_assoc();
?>

<h2>Edit Buku</h2>

<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
    
    Judul: <input type="text" name="Judul" value="<?php echo $data['Judul']; ?>"><br>
    Harga: <input type="number" name="Harga" value="<?php echo $data['Harga']; ?>"><br>

    <button type="submit" name="submit">Update</button>
</form>