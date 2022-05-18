<?php
include 'config.php';
// menyimpan data id kedalam variabel
$kd_buku  = $_GET['kd_buku'];
// query SQL untuk insert data
$query="DELETE from buku where kd_buku='$kd_buku'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:buku.php");
?>

