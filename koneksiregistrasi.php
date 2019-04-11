<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$namaDB = "restoran";
	
	
	$koneksi = mysqli_connect($servername, $username, $password, $namaDB);
	
	if ($koneksi == false) {
		die("Koneksi Gagal " . mysqli_connect_error());
	}
	echo "KONEKSI BERHASIL";
	
	function jalankanSQL($koneksi, $sql){
		$hasil= mysqli_query($koneksi, $sql);
		if ($hasil == false) { 
			die("Error pada perintah SQL : " . $sql . "<br>" . mysqli_error()); 
		} 
		echo "<br />perintah SQL sukses";
		return $hasil;
	}
?>