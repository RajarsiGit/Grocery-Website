<!--
Author: Rajarsi Saha & Sawon Bhattacharya
Author URL: https://github.com/RajarsiGit/ & https://github.com/SawonBhattacharya/
License: MIT License
License URL: https://github.com/RajarsiGit/Grocery-Website/blob/main/LICENSE/
-->
<!DOCTYPE html>
<html class="no-js">
<head>
<title>Our Grocery | Privacy Policy</title>
<!-- for-mobile-apps -->
<link rel="shortcut icon" href="images/favicon.png">
<link rel="canonical" href="https://our-grocery.tk/" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Our Grocery Web Application" >
<meta property="og:url" content="https://our-grocery.tk/" >
<meta property="og:description" content="A good and handy web application that demonstrates an online grocery store for each and everyone who finds it difficult to head to the departmental store.">
<meta name="keywords" content="Online Grocery Store Website " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script> 
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<div class="loader_container">
	<div class="loader">
		<div></div><div></div><div></div><div></div>
		<script>
			$(document).ready(function(){
				$('body').find('img[alt="www.000webhost.com"]').parent().closest('a').closest('div').remove();
			});
			$(window).load(function() {
				$(".loader_container").fadeOut("slow");
			});
		</script>
	</div>
</div>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="/product">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<?php
									if(isset($_COOKIE['u_id'])){
										require_once "php/db_controller.php";
										$db_handle = new DBController();
										$query = "SELECT c_name from customer WHERE c_id = ".intval($_COOKIE['u_id']).";";
      									$result =  $db_handle->fetch($query);  
										echo '<li><a href="/profile">'.explode(' ', trim($result[0]['c_name']))[0].'</a></li><li><a href="" onclick="$.removeCookie(\'u_id\') = \'\'; location.reload();">Logout</a></li>';
									}else{
										echo '<li><a href="/login">Login</a></li><li><a href="/register">Sign Up</a></li>';
									}
								?>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="/mail">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="/"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="/events">Events</a><i>/</i></li>
					<li><a href="/about">About Us</a><i>/</i></li>
					<li><a href="/product">Best Deals</a><i>/</i></li>
					<li><a href="/services">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+918910742101">(+91) 89107 42101</a> / <a href="tel:+918013276482">(+91) 80132 76482</a></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:contact@our-grocery.tk">contact@our-grocery.tk</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>Privacy Policy & Terms of Use</li>
			</ul>
		</div>
	</div>
<!-- //product-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="/product">Branded Foods</a></li>
						<li><a href="/household">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="/vegetable">Vegetables</a></li>
										<li><a href="/fruit">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
                                        <li><a href="/softdrink">Soft Drinks</a></li>
                                        <li><a href="/juice">Juices</a></li>
                                        <li><a href="/energydrink">Energy Drinks</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="/pet">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="/frozen">Frozen Snacks</a></li>
										<li><a href="/frozen">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="/bread">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- privacy -->
		<div class="privacy">
			<div class="privacy1">
				<h3>Privacy Policy</h3>
				<div class="banner-bottom-grid1 privacy1-grid">
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
						<li>Data Collected <span>We collect information you provide directly to us. For example, we collect information 
						when you create an account, subscribe, participate in any interactive features of our services, fill out a form, 
						request customer support or otherwise communicate with us. The types of information we may collect include your 
						name, email address, postal address, credit card information and other contact or identifying information you 
						choose to provide.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-search" aria-hidden="true"></i></li>
						<li>Use of the Data <span>We only use your personal information to provide you the Our Grocery services or to 
						communicate with you about the Our Grocery or the services we provide. Other than what is mentioned here we do not 
						use your data for any other purposes, whatsoever.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
						<li>Sharing of Data <span>We don't share your personal information with third parties. Aggregated, anonymized 
						data is periodically transmitted to external services to help us improve the Website and service.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i></li>
						<li>Security <span>We take reasonable steps to protect personally identifiable information from loss, misuse, 
						and unauthorized access, disclosure, alteration, or destruction. But, you should keep in mind that no Internet 
						transmission is ever completely secure or error-free. In particular, email sent to or from the Sites may not 
						be secure.</span></li>
					</ul>
				</div>
			</div>
			<div id="termsofuse" class="privacy1">
				<h3>Terms of Use</h3>
				<div class="banner-bottom-grid1 privacy2-grid">
					<div class="privacy2-grid1">
						<p>YOUR ACCESS OR USE OF OUR WEBSITE MEANS THAT YOU HAVE READ AND YOU UNDERSTAND AND AGREE TO BE BOUND BY 
						THESE TERMS OF USE. IF YOU ACCESS OR USE OUR WEBSITE ON BEHALF OF AN ENTITY, YOU REPRESENT THAT YOU HAVE THE 
						AUTHORITY TO BIND THAT ENTITY, AND THESE TERMS OF USE ARE THE AGREEMENT OF SUCH ENTITY. IN THAT EVENT, 
						“YOU,” “YOUR,” “VISITOR,” AND “USER” REFER TO THAT ENTITY. IF YOU DO NOT AGREE TO THESE TERMS, THEN YOU HAVE 
						NO RIGHT TO ACCESS OR USE OUR WEBSITE AND ITS CONTENT AND SERVICES.</p>
						<div class="privacy2-grid1-sub">
							<h5>Eligibility</h5>
							<p>We invite users and visitors to <a href="https://our-grocery.tk/">our-grocery.tk</a>.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>Users</h5>
							<p>Users are those of our customers registered to use <a href="https://our-grocery.tk/">our-grocery.tk</a>. 
							Users may, subject to these Terms of Use, (1) use a pilot version of the product which will use our Discovery 
							Engine to create a Full Profile and Knowledge Graph for them, (2) use the Smart Layer to receive recommendations 
							on expert colleagues in the network and relevant content within the network, (3) view the aggregated corporate 
							dashboard, and (4) use other services which we may provide to <a href="https://our-grocery.tk/">our-grocery.tk</a> 
							users. To be a user, you must be at least 18 years old and legally capable of entering into this contract by 
							yourself. When creating your account, you will be asked to choose a user name and password and may be asked to 
							use your LinkedIn account or other supported social network. You must provide true, accurate and complete 
							information. You may not let others use your account, or sell or otherwise transfer your account. You are 
							responsible for maintaining the confidentiality of your password and for all activities that occur under your 
							account. If you discover that the security of your account has been compromised, you must notify us as soon as 
							possible by contacting us through the <a href="https://our-grocery.tk/mail">link</a>.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>Visitors</h5>
							<p>Visitors may, subject to these Terms of Use, access and browse <a href="https://our-grocery.tk/">our-grocery.tk</a> 
							and use the other our-grocery.tk services provided to visitors. You must be at least 13 years old to post 
							comments on <a href="https://our-grocery.tk/">our-grocery.tk</a> and to give us your email address or any 
							other personally identifiable information about you. If you are under 13, please do not give us any 
							information about yourself, including your name, address, or email address. If we discover that a child 
							under 13 has provided us with personally identifiable information, we will delete such information from our 
							files.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>Content</h5>
							<p><a href="https://our-grocery.tk/">our-grocery.tk</a> contains both Our Grocery content and user content. The content 
							on <a href="https://our-grocery.tk/">our-grocery.tk</a> and any authorized clients are licensed, not sold. Such content 
							is protected by copyright laws and, if applicable, by international treaties.</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/events">Events</a></li>
					<li><a href="/about">About Us</a></li>
					<li><a href="/product">Best Deals</a></li>
					<li><a href="/services">Services</a></li>
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/faqs">FAQ</a></li>
					<li><a href="/privacy">privacy policy</a></li>
					<li><a href="/privacy#termsofuse">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/pet">Pet Food</a></li>
					<li><a href="/frozen">Frozen Snacks</a></li>
					<li><a href="/kitchen">Kitchen</a></li>
					<li><a href="/product">Branded Foods</a></li>
					<li><a href="/household">Households</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2020 Grocery Store. All rights reserved | Design by <a href="https://rajarsi.ml/" target="_blank">Rajarsi</a> & Sawon<a href="sawonbhattacharya.github.io/Portfolio/" target="_blank"></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
	<script>
		$(document).ready(function(){
			console.log(window.location.hash);
			if (window.location.hash == "#termsofuse") {
				$('html, body').animate({
					scrollTop: $("#termsofuse").offset().top - 120
				}, 1000);
			}
		});
	</script>
</body>
</html>