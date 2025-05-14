<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$pemasok = $_GET['pemasok'];
$jumlah = $_GET['jumlah'];
$id = $_GET['id'];

$query = mysqli_query($koneksi, "UPDATE stok_buah SET nama='$nama',pemasok='$pemasok',jumlah='$jumlah' WHERE id='$id'");
header('location: ../index.php?page=stok');
?>