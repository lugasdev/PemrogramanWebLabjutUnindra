<?php

function hitungDeterminan($param)
{
    $params = explode(",", $param);
    $determinan = (($params[0] * $params[3])-($params[1] * $params[2]));

    echo "<table style='border-left: solid; border-right: solid;' cellpadding='5' cellspacing='5' >
    <tr>
        <td>{$params[0]}</td>
        <td>{$params[1]}</td>
    </tr>
    <tr>
        <td>{$params[2]}</td>
        <td>{$params[3]}</td>
    </tr>
    </table>";

    echo "<p>Determinan dari matrix tersebut adalah: {$determinan}</p>";
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemrograman Web Lanjut</title>
</head>
<body>
    <p>Nama: Lugas Luqmanul Hakim <br>
    NPM: 202143570011 <br>
    Kelas: Y6D Pemrograman Web Lanjut</p>
    <hr>
    <form action="#" method="post">
        <input type="text" name="params" placeholder="1,2,3,4" value="<?php echo isset($_POST['params']) ? $_POST['params'] : ""; ?>" required>
        <br>
        <small>* masukkan 4 parameter yang dipisahkan dengan koma</small>
        <br>
        <br>
        <button type="submit">Hitung Determinan</button>
    </form>
    <hr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            hitungDeterminan($_POST['params']);
        }
    ?>
</body>
</html>