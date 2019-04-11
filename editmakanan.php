<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content= Tubes Pemrograman Web"">
        <meta name="author" content= Kelompok 7"">

        <title>~REGISTRASI~</title>

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
 include('konek.php');
 if(isset($_GET['ni'])){
  $ni  = $_GET['ni'];
  $query = mysqli_query($db_link,'select * from db_makanan where id_makanan = "'.$ni.'"');
  $data   = mysqli_fetch_array($query);
  $id_makanan = $data['id_makanan'];
  $nama_makanan = $data['nama_makanan'];
  $harga_makanan = $data['harga_makanan'];
  $stock_makanan = $data['stock_makanan']; 
 }
 else{
 $id_makanan = '';
 $nama_makanan = '';
 $harga_makanan = '';
 $stock_makanan = '';
 
 }
?>
   <form method="post" name="frm" action="aksi.php">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">EDIT MAKANAN</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="id_makanan" value="<?php echo $_GET['ni']; ?>" readonly="readonly"> 
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="nama_makanan" value="<?php echo $nama_makanan; ?>">
                                    </div>
         <div class="form-group">
                                        <input class="form-control" type="text" name="harga_makanan" value="<?php echo $harga_makanan; ?>">
                                    </div>
         <div class="form-group">
                                        <input class="form-control" type="text" name="stock_makanan" value="<?php echo $stock_makanan; ?>">
                                    </div>
         <div class="form-group">
                                    <!-- Change this to a button or input when using this as a form -->
                           <center> <input type="submit" name="medit" value="EDIT"></center>  
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </form>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>