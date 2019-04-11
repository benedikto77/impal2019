<?php
include('konek.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from db_makanan where id_makanan="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: TEMPLATE.php');
?>