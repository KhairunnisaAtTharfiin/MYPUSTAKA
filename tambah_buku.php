<?php 
include "config.php";

if(isset($_POST['simpan'])){
    mysqli_query($conn,"insert into buku set
    kd_buku = '$_POST[kd_buku]',
    judul_buku = '$_POST[judul_buku]',
    jenis_buku = '$_POST[jenis_buku]',
    pengarang = '$_POST[pengarang]',
    penerbit = '$_POST[penerbit]'");
    header("location:buku.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
   
<title>Hello, world!</title>
</head>
<body>
    <title>Document</title>

    <div class="container">
         <!--Header-->
         <div class="header" >
                <h2>Menambahkan Buku</h2>
        </div>
        <form action="" method="post">
        <table width="500px"  border = '1' cellspacing ='0' cellpadding ='20' align ='center' solid ='black'>
            
                    <tr>
                    
                            <td>Kode Buku</td>
                            <td><input type="text" name="kd_buku" placeholder="Angka maksimal 5"></td>
                            
                    </tr>
                    <tr> 
                            <td>Judul Buku</td>
                            <td><input type="text" name="judul_buku" ></td>
                    </tr>
                    <tr> 
                            <td>Jenis Buku</td>
                            <td><select name="jenis_buku">
                                <option value="fiksi">fiksi</option>
                                <option value="Self">Self Improvment</option>
                            </select></td>
                    </tr>
                    <tr> 
                            <td>Pengarang</td>
                            <td><select name="pengarang">
                                <option value="Raditya">Raditya Dika</option>
                                <option value="Fiersa">Fiersa Besari</option>
                            </select></td>
                    </tr>
                    <tr> 
                            <td>Penerbit</td>
                            <td><select name="penerbit">
                                <option value="Erlangga">Erlangga</option>
                                <option value="gramedia">Gramedia</option>
                            </select></td>
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
   </div>
      
</body>
</html>


