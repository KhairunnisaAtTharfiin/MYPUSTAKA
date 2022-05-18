<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_anggota  = $_GET['id_anggota'];
// query SQL untuk insert data
$query="DELETE from anggota where id_anggota='$id_anggota'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:anggota.php");
?>

