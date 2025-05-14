<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE From penjualan_buah WHERE id='$id'");
header('location: ../index.php?page=penjualan');
?>