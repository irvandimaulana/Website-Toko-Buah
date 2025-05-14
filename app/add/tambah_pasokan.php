<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$tgl_msk = $_GET['tgl_msk'];
$jml = $_GET['jml'];
$pemasok = $_GET['pemasok'];

$query = mysqli_query($koneksi, "INSERT into tambah_buah (id,nama,tgl_msk,jml,pemasok) VALUES('','$nama','$tgl_msk','$jml','$pemasok')");
header('location: ../index.php?page=data_pembelian_buah');
?>

