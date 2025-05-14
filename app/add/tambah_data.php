<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$tgl = $_GET['tgl'];
$jml = $_GET['jml'];
$hrg = $_GET['hrg'];

$query = mysqli_query($koneksi, "INSERT into penjualan_buah (id,nama,tgl,jml,hrg) VALUES('','$nama','$tgl','$jml','$hrg')");
header('location: ../index.php?page=penjualan');
?>

