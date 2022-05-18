<?php 
require_once "config.php";

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  


  
  <title>Buku</title>
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
       <!--Header-->
        <div class="header">
                <h2>Buku</h2>
        </div>
          
        <!--Button-->
        
        <a href="tambah_buku.php" >
        <button class="button">Tambah Buku</button></a>

        <!--Table-->
        <?php 
                $no =1;
                $hasil = mysqli_query($conn, "SELECT * FROM buku");
                //tampilkan database ke dalam bentuk tabel
                //membuat table header
                echo "<table border = '1' cellspacing ='0' cellpadding ='20' align ='center' width='300px'>
                <tr>
                <th>NO</th>
                <th>Kode Buku</th>
                <th>Pengarang</th>
                <th>Judul Buku</th>
                <th>Jenis Buku</th>
                <th>Penerbit</th>
                <th colspan='2'>Aksi</th>
                </tr> ";
                //membuat tabel varis selain header dan table data
            while($baris = mysqli_fetch_array($hasil)){
                echo "<tr>";
                echo "<td>".$no;$no++;"</td>";
                echo "<td>".$baris['kd_buku']."</td>";
                echo "<td>".$baris['pengarang']."</td>";
                echo "<td>".$baris['judul_buku']."</td>";
                echo "<td>".$baris['jenis_buku']."</td>";
                echo "<td>".$baris['penerbit']."</td>";
                echo "<td><a href ='hapus.php?kd_buku=$baris[kd_buku]'><input type='button' class='btn-delete'></a></td>";
                echo "<td><a href ='update.php?kd_buku=$baris[kd_buku]'><input type='button' class='btn-edit'></a></td>";
               
                echo "</tr>";
            } 
                

            echo "</table>";
            //menutup koneksi
            mysqli_close($conn);
     ?>
  
            
</div>
</div>


</body>
</html>