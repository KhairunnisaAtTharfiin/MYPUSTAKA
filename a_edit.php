<?php 
include 'config.php';
$sql = mysqli_query($conn,"SELECT * FROM anggota where id_anggota ='$_GET[id_anggota]'");
$baris = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>UPDATE-Anggota</title>
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
       <h2>UPDATE ANGGOTA</h2>
   </div>
<form action="" method="post" >
<table  width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black' >
                <tr>
                
                        <td>Id</td>
                        <td><input type="text" name="id_anggota" placeholder="angka maksimal 3"value="<?php echo$baris['id_anggota']?>"></td> 
                        
                </tr>
                 <tr> 
                            <td>Nama Anggota</td>
                            <td><input type="text" name="nm_anggota" size="25" value="<?php echo$baris['nm_anggota']?>"></td>
                    </tr>
                <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" size="25" value="<?php echo$baris['alamat']?>"></td>
                </tr>
                    <tr> 
                            <td>TTL</td>
                            <td><input type="date" name="ttl_anggota" size="25" value="<?php echo$baris['ttl_anggota']?>"></td>
                    </tr>
                <tr> 
                        <td>Email</td>
                        <td><input type="text" name="email" size="25" value="<?php echo$baris['Email']?>"></td>
                </tr>
            <table border="0" align="center">
            <tr>
              
              <td style="text-align: center;"><button type="update"name ="update"class="buttton">Update</button></td>
          </tr>
            </table>
            
</table>
</form>
</div>
</body>
</html>


<?php 
if(isset($_POST['update'])){
    mysqli_query($conn, "UPDATE anggota SET
    nm_anggota = '$_POST[nm_anggota]',
    alamat ='$_POST[alamat]',
    ttl_anggota='$_POST[ttl_anggota]',
    Email ='$_POST[email]'
    WHERE id_anggota ='$_GET[id_anggota]'");
    //menambahkan script untuk menampilkan popup
    echo"<script>alert('DATA BERHASIL DI UPDATE!');</script>";
    echo"<meta http-equiv=refresh content = 1;URL='anggota.php'>";
}



?>

