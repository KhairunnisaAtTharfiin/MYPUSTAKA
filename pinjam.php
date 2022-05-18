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
  <title>Pinjam</title>
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
                <h2>Pinjam</h2>
        </div>
          
        <!--Button-->
        
        <a href="tambah_pinjam.php" >
        <button class="button">Tambah Peminjam</button></a>
<?php 

?>
        <!--Table-->
        <?php 
                $no =1;
                $hasil = mysqli_query($conn, "SELECT * FROM meminjam");
                //tampilkan database ke dalam bentuk tabel
                //membuat table header
                echo "<table border = '1' cellspacing ='0' cellpadding ='20' align ='center'>
                <tr>
                <th>No</th>
                <th>ID pinjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Jumlah Pinjam</th>
                <th>ID anggota</th>
                <th>Kode Buku</th>
                <th colspan='2'>Aksi</th>
                </tr> ";
                //membuat tabel varis selain header dan table data
            while($baris = mysqli_fetch_array($hasil)){
                echo "<tr>";
                echo "<td>".$no;$no++;"</td>";
                echo "<td>".$baris['id_pinjam']."</td>";
                echo "<td>".$baris['tgl_pinjam']."</td>";
                echo "<td>".$baris['tgl_kembali']."</td>";
                echo "<td>".$baris['jumlah_pinjam']."</td>";
                echo "<td>".$baris['id_anggota']."</td>";
                echo "<td>".$baris['kd_buku']."</td>";
                echo "<td><a href ='p_hapus.php?id_pinjam=$baris[id_pinjam]'><input type='button' class='btn-delete'></a></td>";
                echo "<td><a href ='u_pnjm.php?id_pinjam=$baris[id_pinjam]'><input type='button' class='btn-edit'></a></td>";

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