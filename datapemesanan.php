<!DOCTYPE html>
<?php include 'config.php';
  include 'ceklogin.php';
  ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
<?php 
   include('header.php');
   include('pinggir.php');
  ?>
<?php 
$sql = 'select * from pemesanan';
$query = mysqli_query($db_link,$sql);
?>
 <div id="page-wrapper">
     <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Pesanan
                            </div>
        <div class="panel-body">
                                <div class="dataTable_wrapper">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <!--DWLayoutTable-->
 <thead>
 <tr>
    <td align="center" ><strong>email</td>
    <td align="center" ><strong>id_makanan</td>
	<td align="center" ><strong>nama_makanan</td>
 <td align="center" ><strong>jumlah_pemesanan</td>
    <td align="center" ><strong><a href="tambahpemesanan.php">TAMBAH</a></td></tr>
 </thead>
<tbody>
<?php
 while($data = mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center"><?php echo $data['email']; ?></td>
    <td p align="center"><?php echo $data['id_makanan']; ?></td>
 <td p align="center"><?php echo $data['nama_makanan']; ?></td>
 
 <td p align="center"><?php echo $data['jumlah_pemesanan']; ?></td>
   <td p align="center">
  <a href="editpemesanan.php?ni=<?php echo $data['email'];?>" title="Edit"> || edit || </a>
 <a href="deletepesanan.php?ni=<?php echo $data['email'];?>" onclick="return confirm('Yakin mau di hapus?');"><a href="deletepesanan.php?ni=<?php echo $data['email'];?>" onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
 </td>
  </tr>
<?php
 }
 ?>
 </tbody></table>
         </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/startmin.js"></script>

    </body>
</html>	