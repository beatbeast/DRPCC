<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$page='profile';
require('usersession.php');
require('header.php');



?>
<!-- //Modal1 -->
<!-- Modal2 -->
		


  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Welcome <span> <?php echo $fname; ?> </span></h3>
					
			</div>
		<?php
		require 'profile_nav.php'
		?>
		<div class="col-md-8 products-right">
			<h5>Your  <span>Profile</span></h5>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="images/bb2.jpg" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h5>Profile <span>Home</span></h4>
					
					<p>Please Kindly use the navigation at left side of this page for your navigations</p>
					<p><u><b>The market menu:</b></u>  It can be use for placing a product advert and also to check your carts, Please do not forget to update your profile info for a smooth transactions.</p>
					<p><u><b>The Freelancer menu:</b></u> it is for free lancers. You can complete your profile and add your portfolio.</p>
					<p><u><b>The Employer menu:</b></u> it is for free Employers. You can complete your profile and Check for prospective freelancer for your job.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>

</div>
</div>
				
<!--grids-->
<!-- footer -->
<?php
require('footer.php');
?>