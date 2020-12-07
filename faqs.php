<!--
Author: Rajarsi Saha & Sawon Bhattacharya
Author URL: https://github.com/RajarsiGit/ & https://github.com/SawonBhattacharya/
License: MIT License
License URL: https://github.com/RajarsiGit/Grocery-Website/blob/main/LICENSE/
-->
<!DOCTYPE html>
<html class="no-js" style="scroll-behavior: smooth;">
<head>
<title>Our Grocery | FAQ</title>
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
				<li>FAQs</li>
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
<!-- faq -->
		<div class="faq">
			<h3>FAQs</h3>
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Is it necessary to have an account to shop on Our Grocery?
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body panel_text">		
					Yes, it's necessary to log into your Our Grocery account to shop. Shopping as a logged-in user is fast &
					convenient and also provides extra security.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Will the delivery be tried again if I'm not able to collect my order the first time?
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div class="panel-body panel_text">
					Couriers make sure that the delivery is re-attempted the next working day if you can't collect your order the first time.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How does Our Grocery prevent card fraud?
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div class="panel-body panel_text">
					Online payments are monitored by our systems for any suspicious activity and some transactions are verified 
					through extensive checks if we find that they are not authorised by the owner of the card. When we're not 
					able to rule fraud out in rare cases, the transaction is kept on hold and we ask the shopper to share relevant 
					proofs. This is done to make sure that the transaction is genuine and authorised.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>If I have found a security Bug/Vulnerability/Issue what should I do?
					</a>
				  </h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				   <div class="panel-body panel_text">
				   We take security very seriously at Our Grocery. If you have found an issue on Our Grocery, you can report it to
				   contact@our-grocery.tk with the below details:
				   <ol style="margin-bottom: 10px;">
					<li>Steps to reproduce the bug/issue</li>
					<li>Your web browser/mobile browser's name and version</li>
					<li>Screenshot/screencast (if any).</li>
					</ol>
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Will my shipment be safe at the pickup store?
					</a>
				  </h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				   <div class="panel-body panel_text">
				   Rest assured, your shipment is safe with our trusted partners at all pickup stores.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSix">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>What should I do if my shipment is not at the pick-up store?
					</a>
				  </h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
				   <div class="panel-body panel_text">
				   If you have received a confirmation message that your shipment has reached the pick-up store and it is not 
				   there, please contact Customer Support.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSeven">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Is discount available for every product on Our Grocery?
					</a>
				  </h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
				   <div class="panel-body panel_text">
					We try to provide the best deals to our customers. Since, prices of grocery products vary depending on 
					supply and demand, there might be days when you might since lower discounts. But, rest assured you will 
					get a good deal from us.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingEight">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>How fast are the deliveries at Our Grocery?
					</a>
				  </h4>
				</div>
				<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
				   <div class="panel-body panel_text">
					Depending on your location we try to deliver our products as fast as possible! Please understand we are still low on staff. So it might be difficult for us to deliver on-time always.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingNine">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Can I contact the customer service anytime of the day?
					</a>
				  </h4>
				</div>
				<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
				   <div class="panel-body panel_text">
					Sure, we provide 24x7 customer service to all our customers regardless of where they are situated.
				  </div>
				</div>
			  </div>
			</div>
		</div>
<!-- //faq -->
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
				<p>© 2020 Grocery Store. All rights reserved | Design by <a href="https://rajarsi.ml/" target="_blank">Rajarsi</a> & Sawon</p>
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
</body>
</html>