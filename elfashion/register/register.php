<?php
/*
*Registration page
*@author author Warihana Gumah
*/
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Elegante Fashion House - Register</title>
		<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Elegante Fashion House, Youth Fashion, Ghana Fashion House, Contemporary Designs" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<!-- start menu -->
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/simpleCart.min.js"> </script>
		<!-- slide -->
		<script src="../js/responsiveslides.min.js"></script>
		   <script>
		    $(function () {
		      $("#slider").responsiveSlides({
		      	auto: true,
		      	speed: 500,
		        namespace: "callbacks",
		        pager: true,
		      });
		    });
		</script>
		<script type="text/javascript" src="../js/jsformvalidation.js"></script>
	</head>
<body>

	<!-- Include menu.php -->
	<?php require('../layout/customer-menu.php'); 

	//include validation 
	require_once("../controller/utilitycontroller.php");
	?>

	<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<li><a href="../../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li class="active">Register</li>
				</ol>
			</div>
		</div>
	<div class="container">
		<div class="register">
			<h2>Register</h2>
			  	<form action="" method="post">
					<div class="col-md-6  register-top-grid">
						
						<div class="mation">
							<span id="fname_validation">First Name</span>
							<input type="text" name="fname" id="fname" required autofocus> 
						
							<span id="lname_validation">Last Name</span>
							<input type="text" name="lname" id="lname" required> 
						 
							<span id="email_validation">Email Address</span>
							<input type="email" name="email" id="email" required> 

							<span id="pno_validation">Phone Number</span>
							<input type="text" name="pno" id="pno" required>
						</div>	 
					</div>
						 
					<div class=" col-md-6 register-bottom-grid">					   
						<div class="mation">
							<span id="pass_validation">Password</span>
							<input type="password" name="password" id="pass" required>
							<span id="cpass_validation">Confirm Password</span>
							<input type="password" name="cpassword" id="cpass" required>
						</div>
					</div>

					<div class="register-but">
						<button type="submit" value="submit" name="register" id="register" onclick="jsvalidateregister()">Register</button>
					</div>
				</form>
			</div>		

		</div>					
		<?php include("../layout/customer-footer.php"); ?>
	</body>
</html>