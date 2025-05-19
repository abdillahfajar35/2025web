<?php
session_start();
include "koneksi.php";
ceklogin();

$nim = $_POST["nim"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$namafile = $_FILES['foto']['nama'];
$tmpname = $_FILES['foto']['tmp_name'];

$ekstensifoto = explode('.', $namafile);
$ekstensifoto = strtolower(end($ekstensifoto));

$namafilebaru = $nim;
$namafilebaru .= '.';
$namafilebaru .= $ekstensifoto;

move_uploaded_file($tmpname, 'assets/img/' . $namafilebaru);

$hashpass = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, no_telp, email, id_prodi, password, foto)
VALUES ('$nim', '$nama', '$tanggal_lahir', '$no_telp', '$email', '$id_prodi', '$hashpass', '$namafilebaru')";

mysqli_query($conn, $query);

header("location:index.php");
