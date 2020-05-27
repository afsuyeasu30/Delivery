<?php
// Starting session
session_start();

if($_SESSION["c_id"] == ""){
	?>
	<script>
		location.href="login.php";
	</script>
	<?php
}else{
	$id= $_SESSION["c_id"];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUP | USER PROFILE</title>
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
			.parallax {
					background-image: url("bg_image/coffee-cup-wallpaper-38720-39606-hd-wallpapers.jpg");
					 height:;
					 width:100%;
					 background-attachment:fixed;
					 background-position: center;
					 background-repeat: no-repeat;
					 background-size: cover;
					 padding-bottom: ;
					}
					.bg_image {
					background-image: url("bg_image/paper-coffee-cup-wallpaper-2.jpg");
					 height:;
					 width:;
					 background-attachment: ;
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
                  border-radius: 5px;
                  margin: px px;
                  cursor: pointer;
                  -webkit-transition-duration: 0.4s; /* Safari */
                  transition-duration: 0.4s;
                  border-radius: 25px 0px 25px 0px;
                }
	    .button2 {
						
		          background-image: linear-gradient(to right, #1e130c 0%, #9a8478 51%, #1e130c 100%);
	    }
	    .button2:hover{
	      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.10), 0 6px 20px 0 rgba(0,0,0,0.25);

	    }
	    h1{
	    	border:none;font-size: 25px;border:none;text-align:;font-family:times new roman;color:black;
	    	font-weight: bold;
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
			</section><br><br><br>
			<section class="user_profile">
				<?php
					
					include 'connection_procedure.php';
					$user_data="SELECT * FROM user_details WHERE c_id='".$id."'";
					$details = mysqli_query($conn, $user_data);
					if (mysqli_num_rows($details) > 0) {
					    // output data of each row 
					    while($row = mysqli_fetch_assoc($details)) {
					    	
					        $name="" . $row["c_name"]. "";
					        $email="" . $row["c_email"]. "";
					        $phone="" . $row["ph_no"]. "";
					        $road="" . $row["road_name"]. "";
					        $city="" . $row["city"]. "";
					        $post="" . $row["p_office"]. "";
					        $pin="" . $row["pin"]. "";
					    }
					}
					?>
				<div class="container-fluid">
					<div class="container">
						<h1 style="border:none;font-size: 50px;border:none;text-align: center;color:#990033;font-family: times new roman;font-weight: bold;">Your Profile</h1>
						<div class="col-sm-3"></div>
						<div class="col-sm-6 " style="border:;border:none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: white;border-style: groove;border:5px solid white;border-radius: 0px 25px 0px 25px;opacity:0.8;filter:alpha(opacity=80);">
							<h1 style="text-align: center;font-size: 30px;">Hey Mr./ Mrs!</h1>
							<center><img src="icon/0db185fb9c.png" class="circle" style="height:200px;width:200px;float:;"></center>
							 <h1>Name:<span style="font-weight: bold;font-family:Yu Gothic UI Semi;;font-size: 23px;"> <?php echo $name; ?></span> </h1>
							 <h1>Email:<span style="font-weight: bold;font-size: 23px;"> <?php echo $email  ?></span> </h1>
					         <h1>Ph No:<span style="font-weight: bold;font-family:Yu Gothic UI Semi;font-size: 23px;"> <?php echo $phone  ?></span> </h1>
					         <h1 style="text-align: center;border:2px solid black;font-size: 40px;">Address:<span style="font-weight: bold;font-size: 23px;"> </span> </h1>
					         <h1>Road name:<span style="font-weight: bold;font-size: 23px;"><?php echo $road  ?> </span> </h1>
					         <h1>City:<span style="font-weight: bold;font-size: 23px;"><?php echo $city  ?> </span> </h1>
					         <h1>P.O:<span style="font-weight: bold;font-size: 23px;"><?php echo $post  ?> </span> </h1>
					         <h1>Pin:<span style="font-weight: bold;font-size: 23px;"><?php echo $pin  ?> </span> </h1>
					         <a onclick="items()">
					        <center> <h1 style="border:none;font-size:30px;font-weight: bold; font-family:times new roman;color:black;text-decoration:none;" id="color"><span style="background-image: linear-gradient(to right, #403A3E 0%, #BE5869 51%, #403A3E 100%);">Your Order: </span></h1></center>
					         	<div class="row" id="items">
					         		<div class=" col-sm-3" style="border:2px ;border-radius: 25px;margin-left: ;">
					         			<img src="burger/burger-2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:100px; width:100px; float: ;">
					         			<h1 style="border:none;font-size: 20px;border:none;text-align: center;font-weight: bold;color:black;font-family:Cambria">Rockin Burger</h1>
					         			<h1 style=" float: ;color: red;font-size: 25px; font-family:Cambria;font-weight: bold;color:red;text-align: center">Rs. 95</h1>
					         		</div>
					         		<div class=" col-sm-3" style="border:2px ;border-radius: 25px;">
					         			<img src="burger/burger-2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:100px; width:100px; float: ;">
					         			<h1 style="border:none;font-size: 20px;border:none;text-align: center;font-weight: bold;color:black;font-family:Cambria;">Rockin Burger</h1>
					         			<h1 style=" float: ;color: red;font-size: 25px; font-family:Cambria;font-weight: bold;color:red;text-align: center">Rs. 95</h1>
					         		</div>
					         		<div class=" col-sm-3" style="border:2px ;border-radius: 25px;">
					         			<img src="burger/burger-2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:100px; width:100px; float: ;">
					         			<h1 style="border:none;font-size: 20px;border:none;text-align: center;font-weight: bold;color:black;font-family:Cambria">Rockin Burger</h1>
					         			<h1 style=" float: ;color: red;font-size: 25px; font-family:Cambria;font-weight: bold;color:red;text-align: center">Rs. 95</h1>
					         		</div>
					         		<div class=" col-sm-3" style="border:2px ;border-radius: 25px;">
					         			<img src="burger/burger-2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:100px; width:100px; float: ;">
					         			<h1 style="border:none;font-size: 20px;border:none;text-align: center;font-weight: bold;color:black;font-family:Cambria">Rockin Burger</h1>
					         			<h1 style=" float: ;color: red;font-size: 25px; font-family:Cambria;font-weight: bold;color:red;text-align: center">Rs. 95</h1>
					         		</div>
					         	</div>
					         	<script type="text/javascript">
					         		document.getElementById('items').style.display='none';
					         		function items() {
									document.getElementById('items').style.display='block';
									}
					         	</script>
					         	<br>
					         <div class="row">	
					         	<div class="col-sm-6">
							         <a href="login.php"><center><button class="button1 button2" name="submit">Back</button></center></a>
							    </div>
							    <div class="6">
							   	 <a href="logout.php"><center><button class="button1 button2" name="submit">Log Out</button></center></a>
							    </div> 
							</div><br> 
					    </div>
					<div class="col-sm-3"></div>
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