<!DOCTYPE html>
<?php include 'config.php';
  include 'ceklogin.php';
  ?>
<html>

    <head>
        <meta charset="UTF-8">
		
        <title>Warung Irithel</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>
	<?php
$sql = 'select * from pemesanan';
$query = mysqli_query($db_link,$sql);
?>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
						<a class="navbar-brand" href="logout.php">Logout</a>
                        <a class="navbar-brand" href="#top">Warung Irithel</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="color_animation" href="#story">About</a></li>
                            <li><a class="color_animation" href="#pricing">Menu</a></li>
                            <li><a class="color_animation" href="#beer">Gallery</a></li>
                            <li><a class="color_animation" href="#bread">Profile</a></li>
                            <li><a class="color_animation" href="#featured">Owner</a></li>
                            <li><a class="color_animation" href="#contact">Contact Us </a></li> 
							
                                                  
					   </ul>
                    </div><!-- /.navbar-collapse -->
					
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title">Warung Irithel</h2>
                    <h2 class="white second-title">"Makan Enak Tapi Murah!!"</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Disamping kami menyediakan jasa kirim online, kami juga membuka warung yang berada di jalan sukabirus disini teman-teman bisa duduk santai, menikmati suasana dan dekorasi dari warung kami, di samping itu kami juga memiliki sesi acoustic dikala hiburan ketika teman-teman sedang mencicipi hidangan yang ada di tempat kami</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/kabob.jpg" width="250" height="220">
                       <img src="images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/radish.jpg"  width="250" height="220">
                       <img src="images/corn.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Menu</span> pricing</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="special">Special</li>
                                <li class="filter" data-filter="desert">Desert</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul><!-- @end #filter-list -->    
                            <ul id="portfolio">
                                <li class="item dinner special"><img src="images/food_icon02.jpg" alt="Food" >
                                    <h2 class="white">Rp 5500</h2>
									<h3 class="white">Udang Cocol</h3>
									
									<center><a href="tambahudang.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a></center> 
									
                                </li>
                                <li class="item dinner breakfast"><img src="images/food_icon03.jpg" alt="Food" >
                                    <h2 class="white">Rp 1500</h2>
									<h3 class="white">Ayam Cocol</h3>
									
									<center><a href="ayamcocol.html"><button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a></center>									
							   </li>
                                <li class="item special"><img src="images/food_icon04.jpg" alt="Food" >
                                    <h2 class="white">Rp 3500</h2>
									<h3 class="white">Ayam Bahdad</h3>
									
									<center><a href="tambahayam.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a></center> 									
								</li>
                                <li class="item dinner"><img src="images/food_icon05.jpg" alt="Food" >
                                    <h2 class="white">Rp 4500</h2>
									<h3 class="white">Burger King</h3>
									
									<center><a href="burger.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a></center>									
								</li>
                                <li class="item special"><img src="images/food_icon06.jpg" alt="Food" >
                                    <h2 class="white">Rp 1500</h2>
									<h3 class="white">Pie Tabok</h3>
									
									<center><a href="pei.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a></center> 									
								</li>
                                <li class="item desert"><img src="images/food_icon07.jpg" alt="Food" >
                                    <h2 class="white">Rp 2500</h2>
									<h3 class="white">Jamur Ea</h3>
									
									<center><a href="jamurtambah.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a> </center>
								</li>
                                <li class="item desert breakfast"><img src="images/food_icon08.jpg" alt="Food" >
                                    <h2 class="white">Rp 6500</h2>
									<h3 class="white">Sup Cumi</h3>
									
									<center><a href="cumitambah.html"> <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Submit</button></a> </center>
								</li>
					</div>
					<div >
                   <!-- Send Button -->
					<br><br><center><a href="datapemesanan.php"><button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">View Order</button></a></center> 
                  </div>
                </div>
            </div>  
        </section>


         <!-- ============ Our Place  ============= -->


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>Great <span>Place</span> to enjoy</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="images/warung4.jpg" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>Our Place</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text"> Disamping kami menyediakan jasa kirim online, kami juga membuka warung yang berada di jalan sukabirus disini teman-teman bisa duduk santai, menikmati suasana dan dekorasi dari warung kami, di samping itu kami juga memiliki sesi acoustic dikala hiburan ketika teman-teman sedang mencicipi hidangan yang ada di tempat kami</p>
                </div>
            </div>
        </section>


       <!-- ============ Our Special Menu ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>Our Special <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Our Special Menu</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">Ayam Bahdad merupakan menu andalan kami, ayam ini khusus dibuat oleh pembuat langsung di daerah Sukabirus yang dimana pembuat makanan ini adalah satu-satunya orang yang masih hidup dan sebagai penerus kuliner olahan ayam legendaris yang enak ini</p>
                </div>
				       <div class="item special"><img src="images/food_icon04.jpg" width="500" Height="400" alt="Food" >

                </div>
            </div>
        </section>


        
        <!-- ============ Owner ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>We Are<span> Owner</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Owner</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Pemilik Warung Irithel ini diciptakan oleh 4 orang mahasiswa sekawan yang ingin memiliki sebuah rumah makan yang elegan tetapi dengan harga yang murah berikut adalah nama 4 sekawan tersebut: Benedikto Krisnandy, Diva Viveka, Putra Ihsan, Maulina Agustiani yang dimana kami memilki job desk masing-masing untuk membangun Warung Irithel ini</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/2.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/4.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
								 <div class="item">
                                    <img src="images/3.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/1.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>


        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">Follow Us</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href=" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">Contact Us</span>
                    <span class="social_info"><a class="color_animation">0821 6787 8090</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.615456389897!2d107.6303361!3d-6.9729746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x864485f26a388f95!2sUniversitas+Telkom!5e0!3m2!1sid!2sid!4v1525344272862" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Restaurant 2018, Theme by <a href="https://www.instagram.com/divaviveka/">Diva Viveka</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
				</div>
			</div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>