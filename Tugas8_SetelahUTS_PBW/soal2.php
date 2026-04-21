<h2>Bilangan Genap</h2>

<form method="POST">
    Masukkan Bilangan Awal:
    <input type="number" name="input1"><br><br>
    Masukkan Bilangan Akhir:
    <input type="number" name="input2"><br><br>
    <button type="submit">Submit</button>
</form>

<br>

<?php
if (isset($_POST['input1'])) {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    for ($i = $input1; $i <= $input2; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
?>