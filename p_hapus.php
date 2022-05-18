<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_pinjam  = $_GET['id_pinjam'];
// query SQL untuk insert data
$query="DELETE from meminjam where id_pinjam='$id_pinjam'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php

header("location:pinjam.php");
?>