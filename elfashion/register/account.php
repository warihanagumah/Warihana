<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
Customized by Brainy Developers, developers of e-commerce website for Elegante Fashion House 
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Elegante Fashion House - Create Customer Account</title>

		<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	

		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

		<!-- Require menu.php -->
		<?php require("menu.php"); ?>	

		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<li><a href="../../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li class="active">Account</li>
				</ol>
			</div>
		</div>
			<br>
		     <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-4 col-md-5">
	                        <div class="card card-user">
	                            <div class="image">
	                                <img src="../images/background.jpg" alt="..."/>
	                            </div>
	                            <div class="content">
	                                <div class="author">
	                                  <img class="avatar border-white" src="../images/face-1.jpg" alt="..."/>
	                                  <h4 class="title">Joseph Mensah<br />
	                                     <a href="#"><small>@jomens</small></a>
	                                  </h4>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-8 col-md-7">
	                        <div class="card">
	                            <div class="header">
	                                <h4 class="title">Edit Profile</h4>
	                            </div>
	                            <div class="content">

	                                <!-- Form start here -->
	                                <form>
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Username</label>
	                                                <input type="text" class="form-control border-input" placeholder="Username" value="jomens">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label for="exampleInputEmail1">Email address</label>
	                                                <input type="email" class="form-control border-input" placeholder="Email">
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>First Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="Company" value="Joseph">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Last Name</label>
	                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Mensah">
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>Address</label>
	                                                <input type="text" class="form-control border-input" placeholder="Home Address" value="Labone, Accra">
	                                            </div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <div class="form-group">
	                                                <label>City</label>
	                                                <input type="text" class="form-control border-input" placeholder="City" value="Accra">
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>About Me</label>
	                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
	You doubt I'll bother, reading into it
	I'll probably won't, left to my own devices
	But that's the difference in our opinions.</textarea>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="text-center">
	                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
	                                    </div>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>


	                </div>
	            </div>
	        </div>


		<?php include("footer.php"); ?>

	</body>
</html>