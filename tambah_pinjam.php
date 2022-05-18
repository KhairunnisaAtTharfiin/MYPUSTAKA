<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>MEMINJAM</title>
</head>
<body>
    <div class="container">
         <!--Header-->
         <div class="header" >
                <h2>Menambahkan Pinjaman</h2>
        </div>
        <!-- content -->
    <form action="pinjam.php" method="post">
    <table width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black'>
        <tr>
            
            <td>Id pinjam</td>
            <td><input type="text" name="id_pinjam" size="25"></td>
            
    </tr>
        <tr>
        
                <td>Jumlah Pinjam</td>
                <td><input type="text" name="jumlah_pinjam" size="25"></td>
                
         </tr>
         <tr> 
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam" size="25"></td>
         </tr>
         <tr> 
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali" size="25"></td>
         </tr>
         <tr> 
                <td>Id Anggota</td>
                <td><input type="text" name="id_anggota" size="25"></td>
         </tr>
         <tr> 
                <td>Kode Buku</td>
                <td><input type="text"name="kd_buku"></td>
         </tr>
      
            <table border="0">
                    <tr>
                        <td style="text-align: left;"><button type="simpan" name="simpan"  class="button">Simpan</button></td>
                        <td style="text-align: right;"><button type="update"class="button">Update</button></td>

                    </tr>
            </table>


    </table>
</form>
    </div>
</body>
</html>
<!-- Untuk Simpan -->



<?php 
include 'config.php';
if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO meminjam set
    jumlah_pinjam = '$_POST[jumlah_pinjam]',
    tgl_pinjam = '$_POST[tgl_pinjam]',
    tgl_kembali = '$_POST[tgl_kembali]',
    id_anggota= '$_POST[id_anggota]',
    id_pinjam= '$_POST[id_pinjam]',
    kd_buku = '$_POST[kd_buku]'");
}
?>
