<?php
	/*$servername = "localhost";
	$username = "root";
	$password = "";
	$namaDB = "webku";
	
	
	$koneksi = mysqli_connect($servername, $username, $password, $namaDB);
	
	if ($koneksi == false) {
		die("Koneksi Gagal " . mysqli_connect_error());
	}
	echo "KONEKSI BERHASIL";*/
	
	//------------------------------------------------------------------------------------------------------------------------
	require("koneksiregistrasi.php");
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$notelp = $_POST["notelp"];

	
	$pass = md5($pass);
	
	//------------------------------------------------------------------------------------------------------------------------
	/* require_once('defuse-crypto.phar');
	use Defuse\Crypto\Crypto;
	$userName = Crypto::encryptWithPassword($userName, $kunci); */
	$sql = "insert into login(email, password, nama, alamat, notelp, level )
	values('$email','$pass','$nama','$alamat','$notelp',0)";
	/* if (mysqli_query($koneksi, $sql) == false) { 
		die("Error pada perintah SQL : " . $sql . "<br>" . mysqli_error()); 
	} 
	echo "<br />Data Tersimpan"; */	
	
	jalankanSQL($koneksi, $sql);
	echo "<script> alert('Registrasi BERHASIL'); location = 'login.php'; </script>";
	
?>
