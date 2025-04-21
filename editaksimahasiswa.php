<?php
include "koneksi.php";
   
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];


$query = "UPDATE mahasiswa SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', no_telp
= '$no_telp', email = '$email', id_prodi = '$id_prodi' WHERE nim = '$nim'";

mysqli_query($conn, $query);

header("location:index.php");
?>