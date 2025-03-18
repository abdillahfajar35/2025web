<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>DATA MAHASISWA</h1>
     <br>
     <table border ="1" cellspacing="0" cellpading="5">
        <thead>
            <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            </tr>
        </thead>

    <tbody>
    <?php
    $i = 1;
    foreach ($data as $d) : ?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $d["nim"] ?> </td>
            <td> <?php echo $d["nama"] ?> </td>
        </tr>   
    <?php endforeach; ?>

</tbody> 
</table>
</body>
</html>