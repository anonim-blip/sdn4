<?php
header('Content-Type: application/json');
include('../application/config/database.php'); // Sesuaikan dengan path ke file database.php di aplikasi Anda
include('../application/libraries/Database.php'); // Sesuaikan dengan path ke file Database.php di aplikasi Anda

$db = new Database();
$db->initialize();

$nama_siswa = $_POST['nama_siswa'];
?>
