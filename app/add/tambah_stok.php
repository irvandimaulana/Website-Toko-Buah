<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$pemasok = $_GET['pemasok'];
$jumlah = $_GET['jumlah'];

$query = mysqli_query($koneksi, "INSERT into stok_buah (id,nama,pemasok,jumlah) VALUES('','$nama','$pemasok','$jumlah')");
header('location: ../index.php?page=stok');
?>

