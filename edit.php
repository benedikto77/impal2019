<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
	include('konek.php');
	if(isset($_GET['ni'])){
		$ni		= $_GET['ni'];
		$query	= mysqli_query($db_link,'select * from user where email = "'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$password = $data['password'];
		$nama	= $data['nama'];
		$alamat	= $data['alamat'];
		$notelp	= $data['notelp']; 
	}
	else{
	$password = '';
	$nama = '';
	$alamat = '';
	$notelp = '';
	
	}
?>
</p></h2>
<form method="post" name="frm" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Email</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="email" value="<?php echo $_GET['ni']; ?>" readonly="readonly"> 
    </td>
  </tr>
 <tr>
    <td height="27" align="right" valign="middle">Password</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="password" value="<?php echo $password; ?>">
    </label></td>
  </tr>
 <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="nama" value="<?php echo $nama; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="alamat" type="text" size="50" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NoTelp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
		<input name="notelp" type="text" size="50" value="<?php echo $notelp; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>