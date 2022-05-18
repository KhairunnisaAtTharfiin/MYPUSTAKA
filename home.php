<?php 
include "config.php";

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>Document</title>
</head>
<body>
  <!-- Membuat sidebar -->
<div class="sidebar-container">
  <div class="sidebar-logo">
    MYPUSTAKA
  </div>
  <ul class="sidebar-navigation">
    <li class="header">
    <?php echo "<h3> " . $_SESSION['username'] . "   (Admin) </h3>"; ?>
  
    <br>
    <li>
      <a href="anggota.php">
        <i  aria-hidden="true"></i> Anggota
      </a>
    </li>
    <li>
      <a href="pinjam.php">
        <i aria-hidden="true"></i> Pinjam
      </a>
    </li>
    <li>
      <a href="buku.php">
        <i  aria-hidden="true"></i> Buku
      </a>
    </li>
    <li>
      <a href="keluar.php">
        <i aria-hidden="true"></i> Keluar
      </a>
    </li>
  </ul>
</div>
<!-- membuat content-->
<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>HALO SEMUANYA</h1>
      
     
        <?php
          $tanggal= mktime(date("m"),date("d"),date("Y"));
          echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
          date_default_timezone_set('Asia/Jakarta');
          $jam=date("H:i:s");
          echo "| Pukul : <b>". $jam." "."</b>";
          $a = date ("H");
          if (($a>=6) && ($a<=11)){
          echo "<b>, Selamat Pagi !!</b>";
          }
          else if(($a>11) && ($a<=15))
          {
          echo ", Selamat Pagi !!";}
          else if (($a>15) && ($a<=18)){
          echo ", Selamat Siang !!";}
          else { echo ", <b> Selamat Malam </b>";}
       ?> 
    </div>

  </div>
</div>
</div>
</body>
</html>