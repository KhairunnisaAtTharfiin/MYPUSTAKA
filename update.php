<?php 
include 'config.php';
$sql = mysqli_query($conn,"SELECT * FROM buku where kd_buku ='$_GET[kd_buku]'");
$baris = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>UPDATE-BUKU</title>
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
       <h2>UPDATE BUKU</h2>
   </div>
<form action="" method="post" >
<table  width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black' >
<tr>
                    
                    <td>Kode Buku</td>
                    <td><input type="text" name="kd_buku" placeholder="Angka maksimal 5" value="<?php echo $baris['kd_buku']?>"></td>
                    
            </tr>
            <tr> 
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul_buku" value="<?php echo$baris['judul_buku']?>"></td>
            </tr>
            <tr> 
                    <td>Jenis Buku</td>
                    <td><select name="jenis_buku" value="<?php echo $baris['jenis_buku']?>">
                        <option value="fiksi">fiksi</option>
                        <option value="Self">Self Improvment</option>
                    </select></td>
            </tr>
            <tr> 
                    <td>Pengarang</td>
                    <td><select name="pengarang" value="<?php echo $baris['pengarang']?>">
                        <option value="Raditya">Raditya Dika</option>
                        <option value="Fiersa">Fiersa Besari</option>
                    </select></td>
            </tr>
            <tr> 
                    <td>Penerbit</td>
                    <td><select name="penerbit" value="<?php echo$baris['penerbit']?>">
                        <option value="Erlangga">Erlangga</option>
                        <option value="gramedia">Gramedia</option>
                    </select></td>
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
    mysqli_query($conn, "UPDATE buku SET
    pengarang ='$_POST[pengarang]',
    judul_buku ='$_POST[judul_buku]',
    jenis_buku='$_POST[jenis_buku]',
    penerbit ='$_POST[penerbit]'
    WHERE kd_buku ='$_GET[kd_buku]'");
    //menambahkan script untuk menampilkan popup
    echo"<script>alert('DATA BERHASIL DI UPDATE!');</script>";
    echo"<meta http-equiv=refresh content = 1;URL='buku.php'>";
}


?>

