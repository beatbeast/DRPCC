
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
			<h5>Job  <span>Bids</span></h5>
			<div class="men-wear-bottom">
				
				<?php
					$query_statement="SELECT * FROM bids WHERE emp_email='$email'";
					$query= mysqli_query($dbconnect, $query_statement);
					if (mysqli_num_rows($query)>0) {
						$row=mysqli_fetch_assoc($query);
					
				?>

				<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Job Bids</li>
							<!-- <li>Portfolio</li>
							<li>Posted Jobs</li> -->
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

					   	<?php
					   	$free_email=$row['freelancer_email'];
					   	$query_statement1="SELECT * FROM freelancer_profile WHERE email='$free_email'";
						$query1= mysqli_query($dbconnect, $query_statement1);
						//if (mysqli_num_rows($quer1y)>0) {
						$row1=mysqli_fetch_assoc($query1);

					   	?>

							<div class="single_page_agile_its_w3ls">
							  <h6>Bid Information</h6>
							  <div class="bootstrap-tab-text-grid-left">
											<a href="view_freelancer.php?id=<?php echo $row1['id']; ?>"><img src="Freelancer_pictures/<?php echo $row1['photo']; ?>" alt=" " class="img-responsive"></a>
							</div><br>
							<div class="bootstrap-tab-text-grid-right">
											
											
										</div>
										<br>
										<br>
										<br>
										<br>
										
										

							<div class="add-review">
							<ul>
								<li><b>Freelancer: </b><?php echo $row['freelancer_name']; ?></li><br>
								<li><b>Job Title: </b><?php echo $row['job_title']; ?></li><br>
								<li><b>Amount: </b><?php echo $row['amount']; ?></li><br>

							</ul>	
							<h3><a href="approve_bid.php?id=<?php echo $row['id']; ?>"> Aprove bid</a></h3>		
									
							</div>
							   
							</div>
						</div>
						<!--//tab_one-->
						
							   
							</div>
						 </div>

						 
					</div>
				</div>


			<?php
					}
				else{
			?>
			<h3>You don't have a Freelancer Profile <a href="freelancer_profile.php">Click here to begin</a></h3>
			<?php
			}
			?>
					

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