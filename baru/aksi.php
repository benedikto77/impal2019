<?php
include('konek.php');
if(isset($_POST['ayamtambah'])){ //['ayamtambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
	$sql	= "insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ('$email',5,'Ayam Bahdad','$jumlah_pemesanan')";
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: indexjadi.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
include('konek.php');
if(isset($_POST['burgertambah'])){ //['burgertambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
	$sql	= "insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ('$email',7,'Burger King','$jumlah_pemesanan')";
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: indexjadi.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}include('konek.php');
if(isset($_POST['pietambah'])){ //['pietambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
$sql	= "insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ('$email',8,'Pie Tabok','$jumlah_pemesanan')";
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: indexjadi.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}include('konek.php');
if(isset($_POST['cocoltambah'])){ //['ayamtambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
$sql	= "insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ('$email',10,'Ayam Cocol','$jumlah_pemesanan')";
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: indexjadi.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
if(isset($_POST['cumitambah'])){ //['ayamtambah'] merupakan name dari button di form tambah
	$email = $_POST['email'];
	$jumlah_pemesanan= $_POST['jumlah_pemesanan'];
$sql	= "insert into pemesanan (email,id_makanan,nama_makanan,jumlah_pemesanan) values ('$email',9,'Sup Cumi','$jumlah_pemesanan')";	
	$query	= mysqli_query($db_link,$sql);
	
	if($query){
		header('location: indexjadi.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}