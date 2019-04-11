<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databasename = "restoran";
 $db=mysqli_connect($servername,$username,$password,$databasename);
$db_link=mysqli_connect($servername,$username,$password,$databasename);
 	function jalankanSQL($koneksi, $sql){
		$hasil= mysqli_query($koneksi, $sql);
		if ($hasil == false) { 
			die("Error pada perintah SQL : " . $sql . "<br>" . mysqli_error()); 
		} 
		echo "<br />perintah SQL sukses";
		return $hasil;
	}
	if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
 ?>