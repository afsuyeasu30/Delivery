<!DOCTYPE html>
<html>
<head>
	<title> </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	include 'connection_procedure.php';
	$details= "SELECT * FROM yoga_name";
    	$fetchdetails = mysqli_query($conn, $details);
	if (mysqli_num_rows($fetchdetails) > 0) {
	    // output data of each row 
	    while($row = mysqli_fetch_assoc($fetchdetails)) {
 echo '<div class="col-sm-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: ;background: rgb(255, 255, 255);margin-left: 5%; margin-top:3%;">';
							echo'<div class="row">';
								echo'<div class=" col-sm-4" style="margin-bottom: %;margin-top: %;">';
									echo'<img src="burger/Bacon-Burger_114506.jpg" class="img-thumbnail" alt="Cinque Terre" style="height:120px; width:120px; float: ;margin-top:1%;">';
										echo'</div>';
								echo'<div class="col-sm-5" style="margin-top: %;margin-left:-5%;" >';
									echo'<h1 style="font-size: 25px;color: #333333; font-family:Cambria;font-weight: bold;float: ;" >'. $row['yoga_names'].'</h1>';
									echo'<h2 style="font-size:15px;font-family:Yu Gothic UI Semibold;color: black;float: ;">' . $row['yoga_english_name'].' </h2>';
									
								echo'</div>';
								echo'<div class="col-sm-3"> ';
								echo'<h1 style=" float: right;color: red;font-size: 25px;font-weight: bold;font-family:Cambria;">Rs. 95</h1>';
								echo'</div>';
							echo'</div>';
						echo'</div>';
						} 
					}
?>
</body>
</html>