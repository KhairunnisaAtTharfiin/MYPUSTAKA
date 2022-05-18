<?php 
include "config.php";

if(isset($_POST['simpan'])){
    mysqli_query($conn,"insert into anggota set
    id_anggota = '$_POST[Id]',
    nm_anggota = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    ttl_anggota = '$_POST[ttl]',
    Email = '$_POST[email]'");
    header("location:anggota.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>Tambah Anggota</title>
</head>
<body>
    <div class="container">
          <!--Header-->
          <div class="header" >
                <h2>Menambahkan Anggota</h2>
        </div>
        <!-- Content -->
    <form action="" method="post">
    <table width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black'>
        <tr>
        
                <td>Id</td>
                <td><input type="text" name="Id" placeholder="angka maksimal 3"></td>
                
         </tr>
         <tr> 
                <td>Nama Anggota</td>
                <td><input type="text" name="nama" size="25"></td>
         </tr>
         <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="25"></td>
         </tr>
         <tr> 
                <td>TTL</td>
                <td><input type="date" name="ttl" /></td>
         </tr>
         <tr> 
                <td>Email</td>
                <td><input type="email" name ="email" ></td>
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


