<?php
include 'koneksi2.php';

$nama 	= $_POST ['nama'];
$jkel 	= $_POST ['jkel'];
$email 	= $_POST ['email'];
$alamat = $_POST ['alamat'];
$kota 	= $_POST ['kota'];
$pesan 	= $_POST ['pesan'];

$sql = "INSERT INTO kontak (nama, jkel, email, alamat,kota, pesan) VALUES ('$nama', '$jkel', '$email', '$alamat', '$kota', '$pesan')";

mysqli_query($conn, $sql) or die ("Proses Simpan Ke database gagal"); 

mysqli_close($conn);
header("location:kontak.php");

?>