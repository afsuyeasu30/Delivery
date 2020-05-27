<?php
// Starting session
session_start();

if($_SESSION["c_id"] == ""){
	?>
	<script>
		location.href="login.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title> CUTE CUP | ORDER</title>
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
				.bg_image{
						background-image: url("bg_image/maple-osen-heart-love-wood-romantic-listia-autumn-liubov-l-1.jpg");
						background-repeat: no-repeat;
						 width:100%;
						 background-size: cover;
					}
		.button1 {
                  background-color: ; /* Green */
                  border: none;
                  color: white;
                  padding: 10px 130px;
                  text-align: center;
                  text-decoration: ;
                  display: inline-block;
                  font-size: 16px;
                  border-radius: 5px;
                  margin: px px;
                  cursor: pointer;
                  -webkit-transition-duration: 0.4s; /* Safari */
                  transition-duration: 0.4s;
                }
	    .button2 {
						
		          background-image:linear-gradient(to right, #603813 0%, #b29f94 51%, #603813 100%);
	    }
	    .button2:hover{
	      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.10), 0 6px 20px 0 rgba(0,0,0,0.25);

	    }
	   
		</style>
	</head>
	<body>
	    <div class="bg_image">
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
		<br><br><br>
		<?php
		$id= $_SESSION["c_id"];
						include 'connection_procedure.php';
						$c_details= "SELECT * FROM user_details WHERE c_id='".$id."'";
					    $c_details_result = mysqli_query($conn, $c_details); 
					    if (mysqli_num_rows($c_details_result) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($c_details_result)) {
						    $c_name="" . $row["c_name"]. "";
					        $phone="" . $row["ph_no"]. "";
					        $street="" . $row["road_name"]. "";
					        $u_city="" . $row["city"]. "";
					        $post="" . $row["p_office"]. "";
					        $pin="" . $row["pin"]. "";
						    }
						}
		?>
		<div class="container-fluid">
			<center><img src="icon/5033ffde9c1d4851fe54aa080b2c4a0e.gif" style="height: 20%; width: 20%;"></center>
			<div class="row">
				<div class="col-sm-3" style="margin-left:%;"></div>
				<div class="col-sm-6"  style= "box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #ffffff;">
								<h1 style="text-align: center;font-weight: bold; font-family: cambria;;font-size: 45px;color: black;"> Your Details</h1>
							<div class="col-sm-3">
								<center><img src="icon/avatar.png" class="img-circle" alt="Cinque Terre" width="100%" height="100%"></center>
								<h1 style="text-align: center;font-weight: bold; font-family: cambria;font-size: 18px;color: black;"><?php echo $c_name; ?><br><br> <?php echo $phone; ?></h1>
							</div>
							<br>
							<div class="col-sm-9">
								<form class="form-horizontal" method="POST">
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="email" "><h5 style="color: black;">Road Name:</h5></label></center>
								      <div class="col-sm-8" >
								        <input type="text" class="form-control" id="email" placeholder="Enter house no or road name" name="road_name" value='<?php echo $street; ?>' required>
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="email"><h5 style="color:black;">City:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="text" class="form-control" id="email" placeholder="Enter your area" name="city" value='<?php echo $u_city; ?>' required>
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="email"><h5 style="color:black;">P.O:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="text" class="form-control" id="email" placeholder="Enter your city" name="p_o" value='<?php echo $post; ?>' required>
								      </div>
								    </div>
								     <div class="form-group">
								     <center> <label class=" col-sm-3" for="email"><h5 style="color:black;">Pin:</h5></label></center>
								      <div class="col-sm-8">
								        <input type="number" class="form-control" id="email" placeholder="Enter your state" name="pin" value='<?php echo $pin; ?>' required>
								      </div>
								    </div>
							</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-3" style="margin-left: %;"></div>
				<div class="col-sm-6" style= "box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #ffffff;border:;">
					<h1 style="text-align: center;font-weight: bold; font-family: cambria;;font-size: 45px;color: black;"> Order Details</h1>
					<div class="row">
						<?php 
						$fc_id=$_GET["f_id"];
						$dis_id=$_GET["dis_id"];
						include 'connection_procedure.php';
						if($dis_id==""){
						$details= "SELECT * FROM food_item WHERE f_id='".$fc_id."'";
					    	$fetchdetails = mysqli_query($conn, $details);
					    	if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						    $name="" . $row["food_name"]. "";
					        $description="" . $row["f_description"]. "";
					        $price="" . $row["price"]. "";
					    }
					}
					    }else{
					    	$details= "SELECT * FROM discount WHERE f_id='".$fc_id."'";
					    	$fetchdetails = mysqli_query($conn, $details);
					    	if (mysqli_num_rows($fetchdetails) > 0) {
						    // output data of each row 
						    while($row = mysqli_fetch_assoc($fetchdetails)) {
						    $name="" . $row["food_name"]. "";
					        $description="" . $row["f_description"]. "";
					        $price="" . $row["discount_price"]. "";
					    }
					}
					    }
						
					?> 
						<div class=" col-sm-8" style=""><h1 style="font-size: 30px;color: #333333; font-family:Cambria;font-weight: bold;float: ;;" ><?php echo $name; ?></h1>
						 <h2 style="font-size:17px;font-family:Yu Gothic UI Semibold;color: black;float: ;"> <?php echo $description; ?> </h2></div>
						<div class="col-sm-offset-1 col-sm-3">
							<img src="burger/burger-2.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:110px; width:110px; float: ;">
						</div>
					</div>
					<h1 style=" float: ;color: red;font-size: 35px;color: #333333; font-family:Cambria;font-weight: bold;color:red;float: right;" id="show_price"><?php echo $price; ?></h1><br>
					<h2 style="font-size:25px;font-family:Yu Gothic UI Semibold;color: black;float: ;"> Qty: <span style="font-size: 20px;text-align: center;"><input type="text" name="qty" value="1" onfocusout="calculate_price(this.value)" style="width: 30px;"></span> </h2>
					 <script type="text/javascript">
						  function  calculate_price(qty) {
						  var y = <?php echo $price; ?>;	
					  var x = qty * y;
					  document.getElementById("show_price").innerHTML = x;
					}
				  </script>
					<h2 style="font-size:20px;font-family:Yu Gothic UI Semibold;color: black;float: ;"> Payment Mode: Cash on delivery</h2>
					<h2 style="font-size:20px;font-family:Yu Gothic UI Semibold;color: black;float: ;">Estimate Time: 30 mins</h2>
					<br>	
				</div>
			</div>
				<div class="col-sm-3"></div>
			</div>
			<br>
				<center><input type="submit" class="button1 button2" name="submit" value="Confirm Your Order"></center>
				<br><br>
		</div>
	  </div>
	  </form>
			<?php 
				if(isset($_POST['submit'])) {
					$f_qty=$_POST['qty'];
					$t_price=$f_qty * $price;
				    $c_street=$_POST['road_name'];
				    $c_city=$_POST['city'];
				    $c_postoffice=$_POST['p_o'];
				    $c_pincode=$_POST['pin'];
				    $insert_order="INSERT into order_details(c_id,f_id,qty,price,total_price) values('".$id."','".$fc_id."','".$f_qty."','".$price."','".$t_price."')";
				     if ($conn->query($insert_order) === TRUE) {
					$update_add="UPDATE user_details set road_name='".$c_street."',city='".$c_city."',p_office='".$c_postoffice."',pin='".$c_pincode."' WHERE c_id='".$id."'"; 
					if ($conn->query($update_add) === TRUE) {
					echo "<script>window.alert('Your Order is Successfully Placed.');
					
					</script>";
					}
					
					}
															
				}
					# code...
				
			?>
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
	</body>
</html>