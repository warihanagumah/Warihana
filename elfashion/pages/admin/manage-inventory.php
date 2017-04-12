<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
Customized by Brainy Developers, developers of e-commerce website for Elegante Fashion House 
-->

<!DOCTYPE html>
<html>
	<head>	
		<title>Elegante Fashion House |Manage Inventory</title>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<!--<link href="assets/css/style-c.css" rel="stylesheet" type="text/css" media="all" />-->	
		<!--//theme-style-->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    	<!-- Bootstrap core CSS     -->
    	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    	<!-- Animation library for notifications   -->
    	<link href="assets/css/animate.min.css" rel="stylesheet"/>
    	<!--  Paper Dashboard core CSS    -->
    	<link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
		<meta name="keywords" content="Elegante Fashion House, Youth Fashion, Ghana Fashion House, Contemporary Designs, apparels in store" />
	</head>
<body>
<div class="wrapper">   <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="../index.php" class="simple-text">
                    Elegante Fashion
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="manage-inventory.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>Manage Inventory</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Manage Inventory</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
	<div class="products">
			<div class="container">
				<h2>ALL PRODUCTS</h2>
				<div class="col-md-9">
					<div class="content-top1">
						<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.html">
									<img class="img-responsive" src="../images/pi9.png" alt="" />
								</a>
								<h3><a href="single.php">Skirt</a></h3>
								<div class="price">
										<h5 class="item_price">$60</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.html">
									<img class="img-responsive" src="../images/pi12.png" alt="" />

								</a>
								<h3><a href="single.php">Trouser</a></h3>
								<div class="price">
										<h5 class="item_price">$60</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.html">
									<img class="img-responsive" src="../images/pi10.png" alt="" />

								</a>
								<h3><a href="single.php">Pant</a></h3>
								<div class="price">
										<h5 class="item_price">$70</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					
					<div class="clearfix"> </div>
					</div>	
					<div class="content-top1">
						<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.html">
									<img class="img-responsive" src="../images/pi11.png" alt="" />

								</a>
								<h3><a href="single.php">Trouser</a></h3>
								<div class="price">
										<h5 class="item_price">$80</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.html">
									<img class="img-responsive" src="../images/pi9.png" alt="" />

								</a>
								<h3><a href="single.php">Palazoo</a></h3>
								<div class="price">
										<h5 class="item_price">$90</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.php">
									<img class="img-responsive" src="../images/pi12.png" alt="" />
								</a>
								<h3><a href="single.php">Palazoo</a></h3>
								<div class="price">
									<h5 class="item_price">$85</h5>
									<a href="edit-product.php" class="item_add edit">EDIT</a><br>
									<a href="#" class="item_add delete">DELETE</a>
									<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					
					<div class="clearfix"> </div>
					</div>	
					<div class="content-top1">
						<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.php">
									<img class="img-responsive" src="../images/pi10.png" alt="" />
								</a>
								<h3><a href="single.php">Trouser</a></h3>
								<div class="price">
										<h5 class="item_price">$76</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">

								<a href="single.php">
									<img class="img-responsive" src="../images/pi11.png" alt="" />
								</a>
								<h3><a href="single.php">Jeans</a></h3>
								<div class="price">
										<h5 class="item_price">$70</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="single.php">
									<img class="img-responsive" src="../images/pi9.png" alt="" />
								</a>
								<h3><a href="single.php">Trouser</a></h3>
								<div class="price">
										<h5 class="item_price">$80</h5>
										<a href="edit-product.php" class="item_add edit">EDIT</a><br>
										<a href="#" class="item_add delete">DELETE</a>
										<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>	
					
					<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="col-md-3 product-bottom">
					<!--categories-->
						<div class=" rsidebar span_1_of_left">
								<h3 class="cate">Categories</h3>
									 <ul class="menu-drop">
									<li class="item1"><a href="men.php">Men </a>
										<ul class="cute">
											<li class="subitem1"><a href="men-shirts.php">Shirts</a></li>
											<li class="subitem2"><a href="men-trousers.php">Trousers</a></li>
											<li class="subitem3"><a href="men-shoes.php">Shoes</a></li>
										</ul>
									</li>
									<li class="item2"><a href="women.php">Women</a>
										<ul class="cute">
											<li class="subitem1"><a href="women-trousers.php">Trousers </a></li>
											<li class="subitem2"><a href="women-shoes.php">Shoes</a></li>
											<li class="subitem3"><a href="women-skirts.php">Skirts</a></li>
										</ul>
									</li>
								</ul>
							</div>

						<!--initiate accordion-->
								<script type="text/javascript">
									$(function() {
									    var menu_ul = $('.menu-drop > li > ul'),
									           menu_a  = $('.menu-drop > li > a');
									    menu_ul.hide();
									    menu_a.click(function(e) {
									        e.preventDefault();
									        if(!$(this).hasClass('active')) {
									            menu_a.removeClass('active');
									            menu_ul.filter(':visible').slideUp('normal');
									            $(this).addClass('active').next().stop(true,true).slideDown('normal');
									        } else {
									            $(this).removeClass('active');
									            $(this).next().stop(true,true).slideUp('normal');
									        }
									    });
									
									});
								</script>
					<a href="add-product.php" id="add-new">ADD NEW ITEM</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
		<?php include("footer.php"); ?>
	</body>
</html>