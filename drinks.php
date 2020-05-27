<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUP | DRINKS</title>
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
	          <h1 style="margin-top: -40%;font-family: times new roman; font-weight: bold;font-size: 90px;color: white;" >Drinks</h1>
			</div>
		</div>
		<div class="parallax1"><br><br><br>
				<div class="container">
					<div class="row">
						<h1 style="margin-top:;font-family: times new roman; font-weight: bold;font-size: 50px;color: white;text-align: center;"><span style="border:3px solid #ff9900;border-radius: 25px 25px 0px 0px;">Soft Drinks</span></h1>
						<?php 
						
						include 'connection_procedure.php';
						$details= "SELECT * FROM food_item WHERE fc_category=1 ";
					    	$fetchdetails = mysqli_query($conn, $details);
						if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						
						echo'<div class="col-sm-5" style=";margin-left: 5%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: 3%;margin-top: 3%;">';
									echo'<img src="snacks/image_3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;">';
										echo'</div>';
								echo'<div class="col-sm-8" style="margin-top: %;">';
									echo'<h1 style="font-size: 25px;color: #ffffff; font-family:Cambria;font-weight: bold;float: ;">'. $row['food_name'].' <span style=" float: right;color: red;">'. $row['price'].'</span></h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: white;float: ;"> '. $row['f_description'].'. </h2>';
								echo'</div>';
								echo'<button class="button"><a href="order.php" style="color:white; text-decoration:none;"> Order Now</a></button>';
							echo'</div>';
						echo'</div>';
					}
				}
						?>
					</div>
					<div class="row">
						<h1 style="margin-top:;font-family: times new roman; font-weight: bold;font-size: 50px;color: white;text-align: center;"><span style="border:3px solid #ff9900;border-radius: 25px 25px 0px 0px;">Soft Juice or Shake</span></h1>
						<?php 
						include 'connection_procedure.php';
						$details= "SELECT * FROM food_item WHERE fc_category=2 ";
					    	$fetchdetails = mysqli_query($conn, $details);
						if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						
						echo'<div class="col-sm-5" style=";margin-left: 5%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: 3%;margin-top: 3%;">';
									echo'<img src="snacks/image_3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;">';
										echo'</div>';
								echo'<div class="col-sm-8" style="margin-top: %;">';
									echo'<h1 style="font-size: 25px;color: #ffffff; font-family:Cambria;font-weight: bold;float: ;">'. $row['food_name'].' <span style=" float: right;color: red;">'. $row['price'].'</span></h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: white;float: ;"> '. $row['f_description'].'. </h2>';
								echo'</div>';
								echo'<button class="button"><a href="order.php" style="color:white; text-decoration:none;"> Order Now</a></button>';
							echo'</div>';
						echo'</div>';
					}
				}
						?>
					</div>
					<div class="row">
						<h1 style="margin-top:;font-family: times new roman; font-weight: bold;font-size: 50px;color: white;text-align: center;"><span style="border:3px solid #ff9900;border-radius: 25px 25px 0px 0px;">Soft Hot Drinks</span></h1>
						<?php 
						include 'connection_procedure.php';
						$details= "SELECT * FROM food_item WHERE fc_category=3 ";
					    	$fetchdetails = mysqli_query($conn, $details);
						if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						
						echo'<div class="col-sm-5" style=";margin-left: 5%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: 3%;margin-top: 3%;">';
									echo'<img src="snacks/image_3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;">';
										echo'</div>';
								echo'<div class="col-sm-8" style="margin-top: %;">';
									echo'<h1 style="font-size: 25px;color: #ffffff; font-family:Cambria;font-weight: bold;float: ;">'. $row['food_name'].' <span style=" float: right;color: red;">'. $row['price'].'</span></h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: white;float: ;"> '. $row['f_description'].'. </h2>';
								echo'</div>';
								echo'<button class="button"><a href="order.php" style="color:white; text-decoration:none;"> Order Now</a></button>';
							echo'</div>';
						echo'</div>';
					}
				}
						?>
					</div>
					<div class="row">
						<h1 style="margin-top:;font-family: times new roman; font-weight: bold;font-size: 50px;color: white;text-align: center;"><span style="border:3px solid #ff9900;border-radius: 25px 25px 0px 0px;">Soft Cold Coffe</span></h1>
						<?php 
						include 'connection_procedure.php';
						$details= "SELECT * FROM food_item WHERE fc_category=4 ";
					    	$fetchdetails = mysqli_query($conn, $details);
						if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						
						echo'<div class="col-sm-5" style=";margin-left: 5%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: 3%;margin-top: 3%;">';
									echo'<img src="snacks/image_3.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;">';
										echo'</div>';
								echo'<div class="col-sm-8" style="margin-top: %;">';
									echo'<h1 style="font-size: 25px;color: #ffffff; font-family:Cambria;font-weight: bold;float: ;">'. $row['food_name'].' <span style=" float: right;color: red;">'. $row['price'].'</span></h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: white;float: ;"> '. $row['f_description'].'. </h2>';
								echo'</div>';
								echo'<button class="button"><a href="order.php" style="color:white; text-decoration:none;"> Order Now</a></button>';
							echo'</div>';
						echo'</div>';
					}
				}
						?>
					</div>
			</div>
		</div>
	</body>
</html>