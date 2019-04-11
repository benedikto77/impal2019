<?php
include 'koneksiregistrasi.php';
$id         = $_GET['email'];
$user  = mysqli_query($koneksi, "select * from user where email='$id'");
$row        = mysqli_fetch_array($user);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['email'];?>" name="email">
            <table>
                <tr><td>EMAIL</td><td><input type="text" value="<?php echo $row['email'];?>" name="email"></td></tr>
                <tr><td>PASSWORD</td><td><input type="text" value="<?php echo $row['password'];?>" name="password"></td></tr>
               <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
			   <tr><td>ALAMAT</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
               <tr><td>no_Telp</td><td><input type="text" value="<?php echo $row['np_telp'];?>" name="notelp"></td></tr>
                    
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="TEMPLATE.html">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>