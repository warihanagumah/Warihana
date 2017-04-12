<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
Customized by Brainy Developers, developers of e-commerce website for Elegante Fashion House 
-->
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
		<meta name="keywords" content="Elegante FashioN House, Youth Fashion, Ghana Fashion House, Contemporary Designs" />
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
	</head>
<body>

	<!-- Include menu.php -->
	<?php require('menu.php');?> 
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
			  	  <form action="#" method="post">
					 <div class="col-md-6  register-top-grid">
						
						<div class="mation">
							<span>First Name</span>
							<input type="text" name="firstname"> 
						
							<span>Last Name</span>
							<input type="text" name="lastname"> 
						 
							 <span>Email Address</span>
							 <input type="text" name="email"> 
						</div>
						 <div class="clearfix"> </div>
						   <a class="news-letter" href="#">
							 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Remember me</label>
						   </a>
						 </div>
					     <div class=" col-md-6 register-bottom-grid">
							   
								<div class="mation">
									<span>Password</span>
									<input type="password" name="password">
									<span>Confirm Password</span>
									<input type="password" name="password">
								</div>
						 </div>
						 <div class="clearfix"> </div>
					</form>
					
					<div class="register-but">
					  <form action="#" method="post">
						   <input type="submit" value="submit">
						   <div class="clearfix"> </div>
					   </form>
					</div>
			   </div>
			</div>

			<?php include("footer.php"); ?>
	</body>
</html>