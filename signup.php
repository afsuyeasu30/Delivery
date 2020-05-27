<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUPE | SIGNUP</title>
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
					background-image: url("bg_image/834663_brown-background-wallpaper.jpg");
					 height:;
					 width:100%;
					 background-attachment: fixed;
					 background-position: center;
					 background-repeat: no-repeat;
					 background-size: cover;
					 padding-bottom: ;
					}
					.bg_image{
						background-image: url("bg_image/5bae7972a135a2032a8b4569-750-563.jpg");
						background-repeat: no-repeat;
						 width:;
						 height: 804px;
						 background-size: cover;

					}
					.bg_image1{
						background-image: url("bg_image/gala-coffee-offering-1.jpg");
						background-repeat: no-repeat;
						 width:;
						 background-size: cover;
					}
		.button1 {
                  background-color: ; /* Green */
                  border: none;
                  color: white;
                  padding: 10px 50px;
                  text-align: center;
                  text-decoration: ;
                  display: inline-block;
                  font-size: 16px;
                  border-radius: 25px;
                  margin: px px;
                  cursor: pointer;
                  -webkit-transition-duration: 0.4s; /* Safari */
                  transition-duration: 0.4s;
                }
	    .button2 {
						
		          background-image: linear-gradient(to right, #000000 0%, #e74c3c 51%, #000000 100%);
	    }
	    .button2:hover{
	      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.10), 0 6px 20px 0 rgba(0,0,0,0.25);

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
				<br><br><br><br><br>
			<section class="form">
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 bg_image" style="margin-left: 8%;opacity:0.8;filter:alpha(opacity=80);box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br><br><br><br><br><br><br>
								<h1 style="text-align: center;font-weight: bold; font-family: cambria;background:;font-size: 45px;color:#990000;">Sign Up</h1>
								<h3 style="font-size: 18px;color:black;text-align: center;">Join us and share our passion for road</h3>
							</div>
							<div class="col-sm-6 bg_image1" style= "box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #ffffff;opacity:0.8;filter:alpha(opacity=50);" >
								<h1 style="text-align: center;font-weight: bold; font-family: cambria;font-size: 45px;color: black;border-top:1px solid black;">Create an Account</h1>
								<center><img src="icon/male-avatar-icon-flat-vector.jpg" class="img-circle" alt="Cinque Terre" width="30%" height="30%"></center>
								<br>
								<form class="form-horizontal" method="POST">
									 <div class="form-group">
								     <center> <label class=" col-sm-3" for="name"><h5 style="color: white;">Name:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="name" class="form-control" id="u_name" placeholder="Enter your name" name="c_name">
								      </div>
								    </div>
								    <div class="form-group">
								     <center> <label class=" col-sm-3" for="sel1"><h5 style="color: white;">Gender:</h5></label></center>
								      <div class="col-sm-8">
								        <select class="form-control" id="sel1" name="c_gender">
									        <option value="1">Male</option>
									        <option value="2">Female</option>
									        <option value="3">Others</option>
								      	</select>
								      </div>
								    </div>
									 <div class="form-group">
								     <center> <label class=" col-sm-3" for="ph_no"><h5 style="color: white;">Ph No:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="number" class="form-control" id="ph_no" placeholder="Enter your number" name="ph_no">
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="email"><h5 style="color: white;">Email:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="email" class="form-control" id="email" placeholder="Enter email" name="c_email">
								      </div>
								    </div>
								    <div class="form-group">
								       <center> <label class="col-sm-3" for="pwd"><h5 style="color: white;">Password:</h5></label></center>
								      <div class="col-sm-8">          
								        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="road"><h5 style="color: white;">Road name:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="text;" class="form-control" id="road" placeholder="Enter your Road name" name="road_name">
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="city"><h5 style="color: white;">City:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="text;" class="form-control" id="city" placeholder="Enter your city" name="city">
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="post_office"><h5 style="color: white;">P.O: </h5></label></center>
								      <div class="col-sm-8">
								        <input type="text;" class="form-control" id="post" placeholder="Enter your Post office" name="p_o">
								      </div>
								    </div>
								    <div class="form-group">
								     <center> <label class=" col-sm-3" for="pin_code"><h5 style="color: white;">Pincode:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="number;" class="form-control" id="pin" placeholder="Enter your Pincode" name="pin">
								      </div>
								    </div>
								    <div class="form-group">        
								      <div class="col-sm-offset-2 col-sm-8">&nbsp;
								       <center> <input type="submit" class="button1 button2" value="Create" name="submit"></center>
								      </div>
								    </div>
								 </form>

							</div>
							 <?php
										include 'connection_procedure.php';
										if(isset($_POST['submit'])) {
										$name=$_POST['c_name'];
									    $gender=$_POST['c_gender'];
									    $phone=$_POST['ph_no'];
									    $email=$_POST['c_email'];
									    $password=$_POST['pwd'];
									    $street=$_POST['road_name'];
									    $City=$_POST['city'];
									    $postoffice=$_POST['p_o'];
									    $pincode=$_POST['pin'];
									    
									    date_default_timezone_set("Asia/Kolkata");
									    $Date=date("Y-m-d");

									     $upload_data = "INSERT INTO user_details(c_name,c_gender,ph_no,c_email,pwd,road_name,city,p_office,pin) VALUES ('".$name."','".$gender."','".$phone."','".$email."','".$password."','".$street."','".$City."','".$postoffice."','".$pincode."')";
									    // execute query
										 if ($conn->query($upload_data) === TRUE) {
											echo "<script>window.alert('Your Account is Successfully Created.');
											location.href='u_profile.php';
											</script>";
											}else {
											 echo "Error: " . $upload_data . "<br>" . $conn->error;
											}
																					
										}
									?>
							<div class="col-sm-3"></div>
						</div>
					</div>
				</div>
			</section>
			<br><br>
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
		</section>
	</body>
</html>