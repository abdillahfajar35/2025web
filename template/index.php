<?php
session_start();
if (!isset($_SESSION['login'])) {
    //echo $_SESSION['login'];
    header("Location: login.html");
}

include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.nama AS NamaProdi
    FROM mahasiswa
    LEFT JOIN prodi ON mahasiswa.id_prodi = prodi.id";
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
            <th>id_prodi</th>
            <th>nama_prodi</th>
            <th>Aksi</th>
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
            <td> <?php echo $d["id_prodi"] ?> </td>
            <td> <?php echo $d["NamaProdi"] ?> </td>
            <td><a href="deletemahasiswa.php?nim=<?= $d['nim']; ?>"
            onclick="return confirm('Yakin ingin hapus?')">Delete</a> |
            <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>">Edit</a></
        </tr>   
    <?php endforeach; ?>

</tbody> 
</table>
<a href="logout.php">Keluar</a>
</body>
</html>