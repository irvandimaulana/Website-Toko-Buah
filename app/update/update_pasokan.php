<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$tgl_msk = $_GET['tgl_msk'];
$jml = $_GET['jml'];
$pemasok = $_GET['pemasok'];
$id = $_GET['id'];

$query = mysqli_query($koneksi, "UPDATE tambah_buah SET nama='$nama',tgl_msk='$tgl_msk',jml='$jml',pemasok='$pemasok' WHERE id='$id'");
header('location: ../index.php?page=data_pembelian_buah');
?>