<?php  
//session_start();
require ('includes/connection.php'); 

?>

<script type="text/javascript">
	function checkpassword()
	{
		var x=document.forms["signup"]["password"].value;
		var y=document.forms["signup"]["password1"].value;
		if (x !== y)
		{
		  alert("Your Password did not match");
		  return false;
			}
		}

</script>



<!DOCTYPE html>
<html>
<head>
<title>Online Market and Freelancer Website | Home</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Online market Place and Freelancer Website, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		<?php 
			if(!isset($_SESSION['first_name'])) {
				
		?>
			<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
		<?php
			}
			else{
		?>
				<li> <a href="profile.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i>Welcome <?php echo $_SESSION['first_name']; ?></a></li>
		<?php
				
			}
		?>
			
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : +234 8180361376</li>
			<li title="click here to message the admin"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:favourtunde999@yahoo.com" title="Click here to message the admin">favourtunde999@yahoo.com</a></li>
			<?php
			if(isset($_SESSION['first_name'])) {
			?>
			<li> <a href="logout.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i>Logout</a></li>
			<?php
		}
			?>

		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>E</span>Lite Shoppy<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<!-- <li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li> -->
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li <?php if($page=='home'){ echo 'class="active menu__item menu__item--current"'; } else { echo 'class="active menu__item"'; } ?> ><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li <?php if($page=='about'){ echo 'class="active menu__item menu__item--current"'; } else { echo 'class="active menu__item"'; } ?> ><a class="menu__link" href="about.php#about">About</a></li>
					<li <?php if($page=='market'){ echo 'class="active menu__item menu__item--current"'; } else { echo 'class="active menu__item"'; } ?>>
						<a href="Market.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Market<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="MenClothing.php">Men Clothing</a></li>
											<li><a href="Womenclothing.php">Women Clothing</a></li>
											<li><a href="jewelries.php">Jewellry</a></li>
											<li><a href="menWatch.php">Men Watches</a></li>
											<li><a href="Accessories.php">Accessories</a></li>
											<li><a href="Bags.php">Bags</a></li>
											<li><a href="caps.php">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="Phones.php">Phones and accessories</a></li>
											<li><a href="computers.php">Computer & Accessories</a><li>
											<li><a href="Electronics.php">Electronics</a></li>
											<li><a href="beauty.php">Beauty</a></li>
											
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>


					<li  <?php if($page=='freelancer'){ echo 'class="menu__item dropdown menu__item--current"'; } else { echo 'class="menu__item dropdown"'; } ?>    >
					   <a class="menu__link" href="freelancer.php" class="dropdown-toggle" data-toggle="dropdown">Freelancers <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="freelancers.php">Freelancers</a></li>
									<li><a href="employers.php">Employers</a></li>
									<!-- <li><a href="freelancers.php">Mobile App Developers</a></li>
									<li><a href="freelancers.php">System App Developers</a></li> -->
								</ul>
					</li>					
					<li <?php if($page=='profile'){ echo 'class="menu__item dropdown menu__item--current"'; } else { echo 'class="menu__item dropdown"'; } ?> >
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								<?php 
									if(isset($_SESSION['first_name'])) {
								?>
								
									<li><a href="Profile.php">My Profile</a></li>
									<li><a href="logout.php">Log Out</a></li>
									
									<?php
									}
									else{
									?>
									<li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
									<?php	
									}	
								?>
								
								</ul>
					</li>
					<li <?php if($page=='contact'){ echo 'class=" menu__item menu__item--current"'; } else { echo 'class=" menu__item"'; } ?> ><a class="menu__link" href="contact.php">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->

<!-- This is the signin dialogue box -->
<!-- Modal1 -->
		
<?php
	if ($page=='profile'){
		require("profile_modal.php");
	}
	else{
		require("content_modal.php");
	}

	
?>


<!-- //Modal1 -->
<!-- Modal2 -->


<!-- This is the signup dialogue -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="" method="post" name="signup" onsubmit="return checkpassword()">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="fname" required="">
								<label>First Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="lname" required="">
								<label>Last Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password1" title="ensure the password match" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up" name="signup">
						</form>
						
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

