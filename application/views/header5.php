<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hot Tours</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="<?=base_url()?>asset/images/favicon.ico">
		<link rel="shortcut icon" href="<?=base_url()?>asset/images/favicon.ico" />
		<link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
		<script src="<?=base_url()?>asset/js/jquery.js"></script>
		<script src="<?=base_url()?>asset/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?=base_url()?>asset/js/script.js"></script>
		<script src="<?=base_url()?>asset/js/superfish.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.ui.totop.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.equalheights.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.mobilemenu.js"></script>
		<script src="<?=base_url()?>asset/js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
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
	<body>
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
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/tour">OUR DIVISION</a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url()?>welcome/offer">SPECIAL SPOT</a></li>
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
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</header>