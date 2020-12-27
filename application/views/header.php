<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Header</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="<?=base_url()?>asset/images/favicon.ico">
		<link rel="shortcut icon" href="<?=base_url()?>asset/images/favicon.ico" />
		<link rel="stylesheet" href="<?=base_url()?>asset/booking/css/booking.css">
		<link rel="stylesheet" href="<?=base_url()?>asset/css/camera.css">
		<link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.css">
		<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="<?=base_url()?>asset/js/jquery.js"></script>
		<script src="<?=base_url()?>asset/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?=base_url()?>asset/js/script.js"></script>
		<script src="<?=base_url()?>asset/js/superfish.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.ui.totop.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.equalheights.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.mobilemenu.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.easing.1.3.js"></script>
		<script src="<?=base_url()?>asset/js/owl.carousel.js"></script>
		<script src="<?=base_url()?>asset/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?=base_url()?>asset/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="<?=base_url()?>asset/booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/<?=base_url()?>asset/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
	<header>
			<div class="" >
			
				<div class="">
				<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="my_nav navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="<?=base_url()?>">Beautiful Bangladesh</a></li>
	  <li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/about">ABOUT</a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/tour">OUR DIVISION</a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/offer">SPECIAL SPOT </a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/blog">BLOG</a></li>
								
								<?php if($this->session->userdata('id')) { ?>
								
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>Logout">LOGOUT</a></li>
								
								<?php } else{ ?>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>login">LOGIN</a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>signup">SIGNUP</a></li>
								
								
								  <?php } ?>

								
    </ul>
   
  </div>
</nav>
					
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="<?=base_url()?>asset/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>