<!DOCTYPE html>
<html>
<head>
	<title>TAHU SUMEDANG </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<body background="img/background.jpg"width="500" height="500">
<div class="content">
	<header>
		<h1 class="judul">TAHU SUMEDANG</h1>
		<h3 class="deskripsi">Kami adalah rumah makan tahu sumedang</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=menu">Menu</a></li>
			<li><a href="index.php?page=kontak">Contac Us</a></li>
			<li><a href="index.php?page=gallery">Gallery</a></li>
			<li><a href="index.php?page=profile">Profile</a></li>
			<li><a href="index.php?page=lokasi">Lokasi</a></li>
			<li><a href="index.php?page=logout">Logout</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'menu':
				include "halaman/menu.php";
				break;
			case 'kontak':
				include "halaman/kontak.php";
				break;
			case 'gallery':
				include "halaman/gallery.php";
				break;		
			case 'profile':
				include "halaman/profile.php";
				break;	
			case 'lokasi':
				include "halaman/lokasi.php";
				break;	
			case 'logout':
				include "halaman/logout.php";
				break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/menu.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>