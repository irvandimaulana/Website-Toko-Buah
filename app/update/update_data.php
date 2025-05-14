<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$tgl = $_GET['tgl'];
$jml = $_GET['jml'];
$hrg = $_GET['hrg'];
$id = $_GET['id'];

$query = mysqli_query($koneksi, "UPDATE penjualan_buah SET nama='$nama',tgl='$tgl',jml='$jml',hrg='$hrg' WHERE id='$id'");
header('location: ../index.php?page=penjualan');
?>