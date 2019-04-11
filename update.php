<?php
include 'koneksiregistrasi.php';
// menyimpan data kedalam variabel
$email          = $_POST['email'];
$password       = $_POST['password'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$notelp  = $_POST['notelp'];
$level  = $_POST['level'];
// query SQL untuk insert data
$query="UPDATE login SET email='$email',password='$password'nama='$nama',alamat='$alamat',np_telp='$notelp',level='$level' where email='$email'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:TEMPLATE.html");
?>