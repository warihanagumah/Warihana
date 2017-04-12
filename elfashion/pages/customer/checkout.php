<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
Customized by Brainy Developers, developers of e-commerce website for Elegante Fashion House 
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Elegante Fashion House - Checkout</title>
		<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Elegante FashioN House, Youth Fashion, Ghana Fashion House, Contemporary Designs, checkout apparel" />
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
		<!-- Require menu.php -->
		<?php require("menu.php"); ?>		
		<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
						<li><a href="../../index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>

						<li class="active">Checkout</li>
					</ol>
				</div>
			</div>
		<!---->
		<div class="container">
			<div class="check-out">
				<h2>Checkout</h2>
		    	    <table >
				  <tr>
					<th>Item</th>
					<th>Qty</th>		
					<th>Prices</th>
					<th>Delivery details</th>
					<th>Sub total</th>
				  </tr>
				  <tr>
					<td class="ring-in"><a href="single.php" class="at-in"><img src="../images/ce.jpg" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5>Silk dress</h5>
						<p>(Size:2-12 (US) Color:Black, Royal Blue and Yellow) </p>
					
					</div>
					<div class="clearfix"> </div></td>
					<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
					<td>$100.00</td>
					<td>FREE SHIPPING</td>
					<td>$100.00</td>
				  </tr>
				  <tr>
				  <td class="ring-in"><a href="single.php" class="at-in"><img src="../images/ce1.jpg" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5> Chevon Gold Embellished Short Dress</h5>
						<p>(Size:2-18 (US) Color:Black, White and Orange) </p>
					</div>
					<div class="clearfix"> </div></td>
					<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
					<td>$200.00</td>
					<td>FREE SHIPPING</td>
					<td>$200.00</td>
				  </tr>
				  <tr>
				  <td class="ring-in"><a href="single.php" class="at-in"><img src="../images/ce2.jpg" class="img-responsive" alt=""></a>
					<div class="sed">
						<h5>Patterned Dress</h5>
						<p>(Size:2-18 (US) Limited in stock) </p>
					</div>
					<div class="clearfix"> </div></td>
					<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
					<td>$150.00</td>
					<td>FREE SHIPPING</td>
					<td>$150.00</td>
				  </tr>
			</table>
			<a href="#" class=" to-buy">PROCEED TO BUY</a>
			<div class="clearfix"> </div>
		    </div>
		</div>

		<?php include("footer.php"); ?>
	</body>
</html>