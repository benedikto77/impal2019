<?php
include('konek.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$notelp	= $_POST['notelp'];
	$level	= $_POST['level'];
	$password = password_hash($password,PASSWORD_DEFAULT);
	$sql	= 'insert into login (email,password,nama,alamat,notelp) values ("'.$email.'","'.$password.'","'.$nama.'","'.$alamat.'","'.$notelp.'","'.$level.'")';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: TEMPLATE.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['tedit'])){
	
	$password	= $_POST['password'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$notelp	= $_POST['notelp'];
	$email	= $_POST['email'];
	$level	= $_POST['level'];
	$password = password_hash($password,PASSWORD_DEFAULT);
	$sql	= 'update login set password="'.$password.'",nama="'.$nama.'", alamat="'.$alamat.'", notelp="'.$notelp.'", level="'.$level.'" where email="'.$email.'"';
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: TEMPLATE.php');
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['medit'])){
 
 $id_makanan = $_POST['id_makanan'];
 $nama_makanan = $_POST['nama_makanan'];
 $harga_makanan = $_POST['harga_makanan'];
 $stock_makanan = $_POST['stock_makanan'];
 $sql = 'update db_makanan set nama_makanan="'.$nama_makanan.'",harga_makanan="'.$harga_makanan.'", stock_makanan="'.$stock_makanan.'", where id_makanan="'.$id_makanan.'"';
 $query = mysqli_query($db_link,$sql);
 
 if($query){
  header('location: TEMPLATE.php');
 }
 else{
  echo 'Gagal';
 }
}
if(isset($_POST['mtambah'])){ //['mtambah'] merupakan name dari button di form tambah
 $id_makanan = $_POST['id_makanan'];
 $nama_makanan = $_POST['nama_makanan'];
 $harga_makanan = $_POST['harga_makanan'];
 $stock_makanan = $_POST['stock_makanan'];
 $sql = 'insert into db_makanan (id_makanan,nama_makanan,harga_makanan,stock_makanan) values ("'.$id_makanan.'","'.$nama_makanan.'","'.$harga_makanan.'","'.$stock_makanan.'")';
 $query = mysqli_query($db_link,$sql);
 
 if($query){
  header('location: TEMPLATE.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
 }
 else{
  echo 'Gagal';
 }
}
if(isset($_POST['pedit'])){
 
 $email = $_POST['email'];
 $id_makanan = $_POST['id_makanan'];
 $nama_makanan = $_POST['nama_makanan'];
 $jumlah_pemesanan = $_POST['jumlah_pemesanan'];
 $sql = 'update pemesanan set id_makanan="'.$id_makanan.'", nama_makanan="'.$nama_makanan.'",jumlah_pemesanan="'.$jumlah_pemesanan.'", where email="'.$email.'"';
 $query = mysqli_query($db_link,$sql);
 
 if($query){
  header('location: TEMPLATE.php');
 }
 else{
  echo 'Gagal';
 }
}
if(isset($_POST['ptambah'])){ //['mtambah'] merupakan name dari button di form tambah
 $email=$_POST['email'];
 $id_makanan = $_POST['id_makanan'];
 $nama_makanan = $_POST['nama_makanan'];
 $jumlah_pemesanan = $_POST['jumlah_pemesanan'];
 $sql = 'insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ("'.$email.'","'.$id_makanan.'","'.$nama_makanan.'","'.$jumlah_pemesanan.'")';
 $query = mysqli_query($db_link,$sql);
 
 if($query){
  header('location: TEMPLATE.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
 }
 else{
  echo 'Gagal';
 }
}
?>