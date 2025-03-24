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
     <a href="tambahmahasiswa.php">Tambah Data</a>
     <table border ="1" cellspacing="0" cellpading="5">
        <thead>
            <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>No Telp</th>
            <th>Email</th>
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
            <td> <?php echo $d["tanggal_lahir"] ?> </td>
            <td> <?php echo $d["no_telp"] ?> </td>
            <td> <?php echo $d["email"] ?> </td>
        </tr>   
    <?php endforeach; ?>

</tbody> 
</table>
</body>
</html>