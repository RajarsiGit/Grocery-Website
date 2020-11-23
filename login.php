<!--
Author: Rajarsi Saha & Sawon Bhattacharya
Author URL: https://github.com/RajarsiGit/ & https://github.com/SawonBhattacharya/
License: MIT License
License URL: https://github.com/RajarsiGit/Grocery-Website/blob/main/LICENSE/
-->
<!DOCTYPE html>
<html>
<head>
<title>Our Grocery | Sign In & Sign Up</title>
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
	<script>
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
			<a href="/products">Today's special Offers !</a>
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
										echo '<li><a href="/profile">'.explode(' ', trim($_COOKIE['u_id']))[0].'</a></li><li><a href="" onclick="$.removeCookie(\'u_id\') = \'\'; location.reload();">Logout</a></li>';
									}else{
										echo '<li><a href="/login">Login</a></li>';
									}
								?>
								<li><a href="/register">Sign Up</a></li>
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
					<li><a href="/products">Best Deals</a><i>/</i></li>
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
				<li>Sign In & Sign Up</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
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
						<li><a href="/products">Branded Foods</a></li>
						<li><a href="/household">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="/vegetables">Vegetables</a></li>
										<li><a href="/fruits">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
                                        <li><a href="/softdrinks">Soft Drinks</a></li>
                                        <li><a href="/juices">Juices</a></li>
                                        <li><a href="/energydrinks">Energy Drinks</a></li>
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
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="" method="post" id="signin">
					  <input type="text" name="Username" placeholder="Username or Email" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="" method="post" id="signup" enctype="multipart/form-data">
					  <input type="text" name="Name" placeholder="Name" required=" " maxlength="255">
					  <select name="Gender" required=" ">
						<option value="" disabled selected hidden>Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Transgender">Transgender</option>
						<option value="Others">Others</option>
					  </select>
					  <input type="file" id="file" name="Photo" placeholder="Photo" required=" " value=" " accept="image/*">
					  <input type="text" name="Phone" placeholder="Phone Number" required=" " maxlength="10">
					  <input type="email" name="Email" placeholder="Email Address" required=" " maxlength="255">
					  <input type="text" name="Username" placeholder="Username" required=" " maxlength="255">
					  <input type="password" id="pass" name="Password" placeholder="Password" required=" " maxlength="255">
					  <input type="password" id="re_pass" name="Re_Password" placeholder="Retype Password" required=" " maxlength="255">
					  <span id="msg"></span>
					  <script>
						  	$('#file').on('change', function() {
								const size =  (this.files[0].size/1024).toFixed(2); 
								if (size > 500) {
									alert('File should be no more than 500KB!');
									$('#file').val(null);
								} else {
								}
							});
						  $('#pass, #re_pass').on('keyup', function() {
							  if($('#pass').val() == $('#re_pass').val()) {
								$('#submit').prop('disabled', false).removeAttr('style');
								$('#msg').html('Matching').css('color', 'green');
							  }
							  else {
								$('#submit').prop('disabled', true).css('background', 'gray');
								$('#msg').html('Not Matching').css('color', 'red');
							  }
						  });
					  </script>
					  <input type="submit" id="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				<script>
					$(document).ready(function() {
						$('#signin').submit(function(e) {
							e.preventDefault();
							var form = document.getElementById('signin');
							var data = new FormData(form);
							var url = 'php/signin.php';
							$.ajax({
								type: 'POST',
								url: url,
								data: data,
								processData: false,
								contentType: false,
								success: function(data) {
									$('.module.form-module > .toggle, .form, .cta').fadeOut();
									$('.module.form-module').html(data);
									$('.dropdown-menu.drp-mnu > li:first-child > a').html("Logout").attr("onclick", "document.cookie = \"u_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC;\"; location.reload();");
									$('.dropdown-menu.drp-mnu').prepend("<li><a href='/login'>" + $.cookie('u_id').split(' ')[0] + "</a></li>");
									<?php
										if(isset($_SESSION['pay']) && $_SESSION['pay'] == '1') {
											$_SESSION['pay'] = '0';
											echo 'setTimeout(function() {$("#cart").submit();}, 1500);';
										}
										elseif(isset($_SESSION['profile']) && $_SESSION['profile'] == '1') {
											$_SESSION['profile'] = '0';
											echo 'setTimeout(function() {location.href="/profile";}, 1500);';
										}
										else {
											echo 'setTimeout(function() {location.reload();}, 1500);';
										}
									?>
								}
							});
						});
						$('#signup').submit(function(e) {
							e.preventDefault();
							var form = document.getElementById('signup');
							var data = new FormData(form);
							var url = 'php/signup.php';
							$.ajax({
								type: 'POST',
								enctype: 'multipart/form-data',
								url: url,
								data: data,
								processData: false,
								contentType: false,
								success: function(data) {
									$('.module.form-module > .toggle, .form, .cta').fadeOut();
									$('.module.form-module').html(data);
									if($('.dropdown-menu.drp-mnu > li').length > 0) {
										$('.dropdown-menu.drp-mnu > li:first-child').remove();
									}
                                    $('.dropdown-menu.drp-mnu > li:first-child > a').html("Logout").attr("onclick", "document.cookie = \"u_id=; expires=Thu, 01 Jan 1970 00:00:00 UTC;\"; location.reload();");
									$('.dropdown-menu.drp-mnu').prepend("<li><a href='/login'>" + $.cookie('u_id').split(' ')[0] + "</a></li>");
								}
							});
						});
					});
				</script>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Best buy</h3>
				<p>The best deals, offers & services only at Our Grocery! Don't believe us? You will for sure, after you receive your first delivery!</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>Reports</h3>
				<p>We are known to have the best annual records in all respects, starting from sale to delivery and other customer services!</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Fastest Delivery</h3>
				<p>Lightning fast deliveries at your doorstep, as we pick items from local stores and deliver at the lowest prices!</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/events">Events</a></li>
					<li><a href="/about">About Us</a></li>
					<li><a href="/products">Best Deals</a></li>
					<li><a href="/services">Services</a></li>
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/faqs">FAQ</a></li>
					<li><a href="/privacy">privacy policy</a></li>
					<li><a href="/privacy">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="/pet">Pet Food</a></li>
					<li><a href="/frozen">Frozen Snacks</a></li>
					<li><a href="/kitchen">Kitchen</a></li>
					<li><a href="/products">Branded Foods</a></li>
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
				<p>© 2020 Grocery Store. All rights reserved | Design by <a href="https://rajarsigit.github.io/">Rajarsi</a> & Sawon</p>
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
	$(document).ready(function() {
		if($.cookie('u_id')) {
			$('.module.form-module > .toggle, .form, .cta').fadeOut();
			$('.module.form-module').html("<div style='margin: 1em 1em 1em 1em; text-align: center;'><h3>Welcome!</h3><br><div id=\"img\"></div><br><h4 style='padding: 1em 1em 1em 1em;'>" + $.cookie('u_id').split(' ')[0] + "</h4></div>");
			$('#img').html("<?php
				if(isset($_COOKIE['u_id'])) {
					require_once "php/db_controller.php";
					$db_handle = new DBController();
					$query = "SELECT c_photo FROM customer WHERE c_name LIKE '".$_COOKIE['u_id']."' LIMIT 1";
					$result = $db_handle->fetch($query);
					echo "<img src='".$result[0]['c_photo']."' height='100'>";
				}
				else {
					echo "";
				}
			?>");
		}
	});
</script>
</body>
</html>