<?php
include "koneksi.php";
   
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];


$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, no_telp, email, id_prodi)
VALUES ('$nim', '$nama', '$tanggal_lahir', '$no_telp', '$email', '$id_prodi')";

mysqli_query($conn, $query);

header("location:index.php");
?>