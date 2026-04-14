<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <h2>Jenis kendaraan berdasarkan roda</h2>

    
    <form action="" method="POST">
        <label for="roda">Jumlah Roda:</label>
        <input type="number" id="roda" name="roda" required>
        <button type="submit">Submit</button> <br> <br>
    </form>

    <?php
    if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch($roda){
        case 2:
            echo "Sepeda, Motor, Sepeda Listrik, Motor Listrik";
            break;
        case 3:
            echo "Becak, Bajaj, Bentor";
            break;
        case 4:
            echo "Mobil, Truk, Ambulan";
            break;
        default:
            echo "Kendaraan tidak diketahui";
            }
    }
    ?>

</body>
</html>



