
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
			<h5>Freelancers  <span>Profile</span></h5>
			<div class="men-wear-bottom">
				
				<?php
					$query_statement="SELECT * FROM freelancer_profile WHERE email='$email'";
					$query= mysqli_query($dbconnect, $query_statement);
					if (mysqli_num_rows($query)==1) {
						$row=mysqli_fetch_assoc($query);
					
				?>

				<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Freelancer</li>
							<li>Portfolio</li>
							<li>Posted Jobs</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Basic Information</h6>
							  <div class="bootstrap-tab-text-grid-left">
											<img src="Freelancer_pictures/<?php echo $row['photo']; ?>" alt=" " class="img-responsive">
							</div><br>
							<div class="bootstrap-tab-text-grid-right">
											
											
										</div>
										<br>
										<br>
										<br>
										

							   <div class="add-review">
										
										<form action="" method="post">
												<p><b>Surname:</b><br> <input type="text" name="surname" readonly value="<?php echo $row['surname'] ?>"> </p>
												<p><b>Other Name:</b><br> <input type="text" name="othername" readonly value="<?php echo $row['othername'] ?>"> </p>
												<p><b>Area of Expertise:</b><br> <input type="text" name="AOE" readonly value="<?php echo $row['AOE'] ?>"> </p>
												<p><b>Years of Experience:</b><br> <input type="text" name="YOE" readonly value="<?php echo $row['YOE'] ?>"> </p>
												<p><b>Brief Description:</b>
												<textarea name="description" readonly value="<?php echo $row['description'] ?>"><?php echo $row['description'] ?></textarea></p>
											<input type="submit" value="EDIT">
										</form>
									</div>
							   
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">

							  <h6>Portfolios</h6>
				<?php
					$statement="SELECT * FROM portfolio WHERE email='$email'";
					$query1= mysqli_query($dbconnect, $query_statement);
					if (mysqli_num_rows($query1)>0) {
						while ($row = $query1->fetch_assoc()) {
					
				?>

				<ul>
					<li><b>Job Title: </b> </li>
					<li><b>Category: </b> </li>
					<li><b>Description: </b> </li>
					<li><b>Amount Paid: </b> </li>
				</ul>



				<?php

			}
		}
			?>

							   
							   
							</div>
						 </div>

						 <div class="tab3">
							
							<div class="single_page_agile_its_w3ls">

							  <h6>Available Jobs</h6>
							  <p>Below are the list of available jobs</p>
				<?php
					$statement2="SELECT * FROM post_job";
					$query2= mysqli_query($dbconnect, $statement2);
					if (mysqli_num_rows($query2)>0) {
						while ($row2 = $query2->fetch_assoc()) {
					
				?>

				<ul>
					<li><b>Company Name: </b><?php echo $row2['company_name'] ?> </li><br>
					<li><b>Employer: </b> <?php echo $row2['employer'] ?></li><br>
					<li><b>Job Title: </b> <?php echo $row2['job_title'] ?></li><br>
					<li><b>Category: </b> <?php echo $row2['category'] ?></li><br>
					<li><b>Description: </b> <?php echo $row2['description'] ?></li><br>
					<li><b>Amount Paid: </b> <?php echo $row2['amount'] ?></li><br>
					<h3><a href="bid.php?id=<?php echo $row2['id']; ?>">Bid for job</a></h3>
				</ul>



				<?php

			}
		}
			?>

							   
							   
							</div>
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