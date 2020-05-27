<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUP | MENU</title>
		  <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	      <script type="text/javascript">$(function () {
							  $(document).scroll(function () {
							    var $nav = $(".navbar-fixed-top");
							    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
							  });
							});
                  
				</script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<style type="text/css">
		 .navbar-fixed-top.scrolled {
			  background-color: #fff !important;
			  transition: background-color 100ms linear;
			}
            .hv:hover{
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
					 transition: 0.3s;
				}
				@media screen and (max-width:400px) {
								  .item, .carousel, .slide {height:300px;}
							 }
				            .navbar-fixed-top.scrolled {
				  background-color: rgba(0,0,0,0.9) !important;
				  transition: background-color 2000ms linear;
				}
			.parallax {
							background-image: url("bg_image/04-burger-king-fondue.w710.h473.2x.jpg");
							 height:660px ;
							 width:100%;
							 background-attachment: fixed;
							 background-position: center;
							 background-repeat: no-repeat;
							 background-size: cover;
							 padding-bottom: ;
						}
			.parallax1 {
						background-image: url("bg_image/170b2bba7048acbb7ef07424405abe1a.jpg");
						 height: %;
						 width:100%;
						 background-attachment: fixed;
						 background-position: center;
						 background-repeat: no-repeat;
						 background-size: cover;
						 padding-bottom: ;
					}
					.button {
						background-color: red;
						border: none;
						color: white;
						padding: 10px;
						width:20%;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 16px;
						margin-top:%;
						margin-left:%;
						float: right;
						cursor: pointer;
						border-radius: 8px;
					}
		</style>
	</head>
	<body>
		<div class="parallax">
			<section class="header">
				<div class="navbar navbar-inverse navbar-fixed-top" style="padding-bottom: 18px;background-color: transparent; border-bottom: transparent; height: 75px;">
					<div class="container-fluid">
					    <div class="navbar-header" >
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: black;" >
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>                        
						      </button>
								    <img src="icon/11118.png" class="rounded" alt="Cinque Terre" width="80px" height="80px" style="margin-top: -5%;">  
								   <a class="navbar-brand" style="color:#ffffff;font-size: 50px; font-family: Footlight MT Light; text-shadow:2px 3px 3px #a6a6a6; margin-top:7%;margin-left:%; float: right;" >   CUTE CUP</a>
						</div>
					    <div class="collapse navbar-collapse" id="myNavbar" style="border-top: transparent;padding-top: 10px;">
						     <ul class="nav navbar-nav navbar-right">
						        <li><a href="index.php" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
						        
						        <li><a href="index.php#menu"><span class="glyphicon glyphicon-th-list"></span> Menu </a></li>
						        <li><a href="index.php#about"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
						      
						      
						        <li><a href="index.php#service"><span class="glyphicon glyphicon-lock"></span> Service</a></li>
						        <li><a href="index.php#contact"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
						        <li><a href="login.php"><span class="glyphicon glyphicon-pencil"></span> Log In</a></li>
						     </ul>
					    </div>
				    </div>
				</div>
			</section>
			<div class="carousel-caption">
	          <h1 style="margin-top: -40%;font-family: times new roman; font-weight: bold;font-size: 90px;color: white;" data-aos="zoom-in-down" >Cafeteria Menu</h1>
			</div>
		</div>
		<div class="parallax1"><br><br><br>
				<div class="container">
					<div class="row">
						<?php 
						$f_id=$_GET["f_cat"];
						include 'connection_procedure.php';
						if($f_id==8){
						$details= "SELECT * FROM food_item WHERE fc_category=8";
					    	$fetchdetails = mysqli_query($conn, $details);

					    }elseif ($f_id==7) {
					    	$details= "SELECT * FROM food_item WHERE fc_category=7";
					    	$fetchdetails = mysqli_query($conn, $details);
					    }elseif ($f_id==6) {
					    	$details= "SELECT * FROM food_item WHERE fc_category=6";
					    	$fetchdetails = mysqli_query($conn, $details);
					    }elseif ($f_id==5) {
					    	$details= "SELECT * FROM food_item WHERE fc_category=5";
					    	$fetchdetails = mysqli_query($conn, $details);
					    }elseif ($f_id==1) {
					    	$details= "SELECT * FROM food_item WHERE fc_category=1 || fc_category=2 || fc_category=3 || fc_category=4";
					    	$fetchdetails = mysqli_query($conn, $details);
					    }
						if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						
						echo'<div class="col-sm-5" style=";margin-left: 5%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: 3%;margin-top: 3%;">';
									echo'<img src="'. $row['img'].'" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;">';
										echo'</div>';
								echo'<div class="col-sm-8" style="margin-top: %;">';
									echo'<h1 style="font-size: 25px;color: #ffffff; font-family:Cambria;font-weight: bold;float: ;">'. $row['food_name'].' <span style=" float: right;color: red;">'. $row['price'].'</span></h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: white;float: ;"> '. $row['f_description'].' </h2>';
								echo'</div>';
								echo'<button class="button"><a href="order.php?f_id='. $row["f_id"].'" style="color:white; text-decoration:none;"> Order Now</a></button>';
							echo'</div>';
						echo'</div>';
					}
				}
						?>
					</div>
			</div>
		</div>
		<section class="footer"><!--footer-->
			<div class="bg_image1">
				<div class="container-fluid " style=";">
					<br>
					<div class="container" style="background: ;">
						<center><h1 style="font-family: cambria;color:#660033;font-weight: bold;font-size: 50px;" data-aos="fade-down" data-aos-duration="1500">Developer Details</h1></center>
						<div class="row">
							<div class="col-sm-offset-1 col-md-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-left: %;background-color: white;border:10px solid black;border-radius: 25px;border-style: double;margin-right: 7%; background-image:  linear-gradient(to right, #8e9eab 0%, #eef2f3 51%, #8e9eab 100%);" data-aos="fade-up-right" data-aos-duration="1500"><br>
								<center><img src="icon/B612_20190411_195151_632.jpg" class="img-circle" style="width:50%; height:25%;" data-aos="fade-up-right" data-aos-duration="1500"></center>
								<h3 style="color: white;font-family:times new roman;font-size: 20px;" data-aos="zoom-out-right" data-aos-duration="1500">
									<span class="glyphicon glyphicon-user"></span> Afsara Yeasmin<br><br>
									<i class="glyphicon glyphicon-envelope"></i> afsarayeasmin30@gmail.com<br><br>
									<i class="glyphicon glyphicon-earphone"></i><span> Phone:</span> 9876347689</h3>
									<a href="https://www.facebook.com/afsara.yeasmin"><i class='fab fa-facebook' style='font-size:30px'></i></a>
									&nbsp; &nbsp;<a href="https://www.instagram.com/afsu_yeasu/"><i class='fab fa-instagram' style='font-size:30px;color: #99004d'></i></a>	
							</div>
							
							<div class="col-sm-offset-1 col-md-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: white;;border:10px solid black;border-radius: 25px;border-style: double;padding-bottom: 1.5%; background-image:  linear-gradient(to right, #8e9eab 0%, #eef2f3 51%, #8e9eab 100%);" data-aos="fade-up-left" data-aos-duration="1500"><br>
								<center><img src="icon/IMG-20190517-WA0000.jpg" class="img-circle" style="width:50%; height:25%;" data-aos="zoom-out-left" data-aos-duration="1500" ></center>
								<h3 style="color: white;font-family:times new roman;font-size: 20px;" data-aos="zoom-out-left" data-aos-duration="1500">
									<span class="glyphicon glyphicon-user"></span> Tiyasa Bhattacharya<br><br>
									<i class="glyphicon glyphicon-envelope"></i> tiyasabhattacharya418998@gmail.com<br><br>
									<i class="glyphicon glyphicon-earphone"></i><span> Phone:</span> 9876347689
									&nbsp; &nbsp;<a href="https://www.facebook.com/"><i class='fab fa-facebook' style='font-size:30px'></i></a>
									&nbsp; &nbsp;<a href="https://www.instagram.com//"><i class='fab fa-instagram' style="font-size:30px;color: #99004d;"></i></a>
								</h3>
							</div>
						</div>
						<center><h4 style="font-family: Yu Gothic UI Semibold;font-style: italic;">©CopyRight 2018-2019 Claimed By Tiyasa Bhattacharya & Afsara Yeasmin</h4></center>
					</div>
					
				</div>
			</div>
		</section>s
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
		  AOS.init();
		</script>
	</body>
</html>