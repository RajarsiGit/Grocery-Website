<!--
Author: Rajarsi Saha & Sawon Bhattacharya
Author URL: https://github.com/RajarsiGit/ & https://github.com/SawonBhattacharya/
License: MIT License
License URL: https://github.com/RajarsiGit/Grocery-Website/blob/main/LICENSE/
-->
<!DOCTYPE html>
<html class="no-js">
<head>
<title>Our Grocery | Admin DB</title>
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
<script type="text/javascript" src="js/three.min.js"></script>
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
	<div>
		<script src="js/loader.js"></script>
		<script>
			$(document).ready(function(){
				$('body').find('img[alt="www.000webhost.com"]').parent().closest('a').closest('div').remove();
			});
			$(window).load(function() {
				$(".loader_container").fadeOut("slow");
				setTimeout(() => {
					$(".loader_container").remove();
				}, 5000);
			});
		</script>
	</div>
</div>
	
<body>

<!-- banner -->
	<div class="banner" style="vertical-align: middle;">
		<div class="w3l_banner_nav_left"></div>
		<div class="w3l_banner_nav_right" style="width:100%">
		    <div class="w3_login">
			    <h3>ADMIN DB PANEL</h3>
			    <div class="w3_login_module" style="min-height: 300px;">
				<div class="module form-module">
                    <div style="height: 5vh; "></div>
                    <div class="form">
                        <form id="db" enctype="multipart/form-data">
                            <input id="input" type="hidden" value="" name="data">
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(1)">CREATE CUSTOMER TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(2)">CREATE CART TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(3)">CREATE ADDRESS_DETAILS TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(4)">DROP CUSTOMER TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(5)">DROP CART TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(6)">DROP ADDRESS_DETAILS TABLE</button>
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="window.open('https://databases.000webhost.com/db_structure.php?server=1&db=id15407179_grocery', '_blank');">PHPMYADMIN DATABASE</button>
                            <input type="file" name="file" style="color: #fff; width: 40%; margin: 0.25em auto 0.25em auto;" accept=".csv">
                            <button type="button" style="color: #fff; width: 100%; margin: 0.25em;" onclick="submitForm(7)">UPDATE PRODUCTS</button>
                            <div id="msg"></div>
                        </form>
                    </div>
                    <script>
                        function submitForm(n) {
                            $('#input').attr('value', n)
                            $('#msg').html('');
                            var data = new FormData($('form')[0]);
                            $.ajax({
                                type : 'POST',
                                url  : 'php/db.php',
                                data : data,
                                processData: false,
								contentType: false,
                                success : function(data){
                                    $("#msg").html(data);
                                    $("#db")[0].reset();
                                }
                            });
                        }
                    </script>
				</div>
			</div>

		</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>