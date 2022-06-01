<?php
$host = "localhost";
$user = "admin_klinik";
$pass = "312010071";
$db = "klinik_312010067";
$conn = mysqli_connect('localhost','admin_klinik','312010067','klinik_312010067');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "Koneksi berhasil";
?>