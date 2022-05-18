<?php 
include 'config.php';
$sql = mysqli_query($conn,"SELECT * FROM meminjam where id_pinjam ='$_GET[id_pinjam]'");
$baris = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>UPDATE-PINJAMAN</title>
<!-- CSS untuk bagian tombol UPDATE -->
    <style>
        .buttton{
            background-color: #4A9C48;
    color: white;
    border-radius: 8px;
    border: none;
    width: 100px;
    height: 30px;
    align-items: center;
    margin-top: 10px;
        }

        .buttton:hover{
            background-color: #45c043;
    color: white;
        }
    </style>
</head>
<body>
    
<!-- Membuat Table -->
<div class="container">
   <div class="header">
       <h2>UPDATE MEMINJAM</h2>
   </div>

<form action="pinjam.php" method="post">
    <table width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black'>
        <tr>
            
            <td>Id pinjam</td>
            <td><input type="text" name="id_pinjam" size="25" value="<?php echo$baris['id_pinjam']?>"></td>
            
    </tr>
        <tr>
        
                <td>Jumlah Pinjam</td>
                <td><input type="text" name="jumlah_pinjam" size="25" value="<?php echo$baris['jumlah_pinjam']?>"></td>
                
         </tr>
         <tr> 
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam" size="25" value="<?php echo$baris['tgl_pinjam']?>"></td>
         </tr>
         <tr> 
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali" size="25" value="<?php echo$baris['tgl_kembali']?>"></td>
         </tr>
         <tr> 
                <td>Id Anggota</td>
                <td><input type="text" name="id_anggota" size="25" value="<?php echo$baris['id_anggota']?>"></td>
         </tr>
         <tr> 
                <td>Kode Buku</td>
                <td><input type="text"name="kd_buku" value="<?php echo$baris['kd_buku']?>"></td>
         </tr>
      

            <table border="0" align="center">
            <tr>
              
              <td style="text-align: center;"><button type="update"name ="update"class="buttton">update</button></td>
          </tr>
            </table>
            

</form>
</div>
</body>
</html>


<?php 
if(isset($_POST['update'])){
    mysqli_query($conn, "UPDATE meminjam SET
     jumlah_pinjam = '$_POST[jumlah_pinjam]',
    tgl_pinjam = '$_POST[tgl_pinjam]',
    tgl_kembali = '$_POST[tgl_kembali]',
    id_anggota= '$_POST[id_anggota]',
    kd_buku = '$_POST[kd_buku]' where
    id_pinjam= '$_GET[id_pinjam]'");
    //menambahkan script untuk menampilkan popup
    echo"<script>alert('DATA BERHASIL DI UPDATE!');</script>";
    echo"<meta http-equiv=refresh content = 1;URL='pinjam.php'>";
   
}


?>

