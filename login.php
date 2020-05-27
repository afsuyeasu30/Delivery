<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUPE | LOGIN</title>
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
					background-image: url("bg_image/1525105614384.jpeg");
					 height:657px;
					 width:100%;
					 background-attachment:;
					 background-position: center;
					 background-repeat: no-repeat;
					 background-size: cover;
					 padding-bottom: ;
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
						
		          background-image: linear-gradient(to right, #1D2B64 0%, #F8CDDA 51%, #1D2B64 100%);
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
							<div class="col-sm-3" style="margin-left: 3%;"></div>
							<div class="col-sm-5" style= "box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #ffffff;opacity:0.8;filter:alpha(opacity=80);border-style: double;border:3px solid black;border-radius: 25px;" >
								<h1 style="text-align: center;font-weight: bold; font-family: cambria;background:linear-gradient(to bottom, #660066 0%, #ff3399 100%);font-size: 45px;color: white;">Log In</h1><br>
								<center><img src="icon/male-avatar-icon-flat-vector.jpg" class="img-circle" alt="Cinque Terre" width="30%" height="30%"></center>
								<br>
								<form class="form-horizontal" method="POST">
									 <div class="form-group">
								     <center> <label class=" col-sm-3" for="ph_no">Ph No:</label></center>
								      <div class="col-sm-8">
								        <input type="number" class="form-control" id="ph_no" placeholder="Enter phone number" name="phno">
								      </div>
								    </div><br>
								    <div class="form-group">
								       <center> <label class="col-sm-3" for="pwd">Password:</label></center>
								      <div class="col-sm-8">          
								        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
								      </div>
								    </div>
								   
								    <div class="form-group">        
								      <div class="col-sm-offset-2 col-sm-9">&nbsp;
								        <input type="submit" class="button1 button2" name="submit" value="Log In">
								        <button type="submit" class="button1 button2" style="float: right;"><a href="index.php" style="text-decoration:none;color: white; ">Cancel</a></button>
								      </div>
								    </div>
								    <a href="signup.php"><h1 style="text-align: center; font-size: 25px;">Sign Up</h1></a>
								 </form>
								  <?php
									 include 'connection_procedure.php';
									 if(isset($_POST['submit'])){
									 	$phone = $_POST['phno'];
										$password = $_POST['pswd'];
										$put_data="SELECT c_id FROM user_details WHERE ph_no='".$phone."' AND pwd='".$password."' ";
										$put_data_result = mysqli_query($conn, $put_data);
										if (mysqli_num_rows($put_data_result) > 0) {
											while($row = mysqli_fetch_assoc($put_data_result)) {
											    $_SESSION["c_id"]=$row["c_id"];
												?>
												<script>
													location.href="u_profile.php";
												</script>
												<?php
											} 
										}else {
											    ?>
											    <script type="text/javascript">
											    	window.alert("Enter Proper Details");
											    </script>
											    <?php
											}
										}
									 
									 ?>
							</div>
							<div class="col-sm-3"></div>
						</div>
					</div>
				</div>
			</section>
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