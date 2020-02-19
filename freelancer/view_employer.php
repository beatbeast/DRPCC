
<?php
session_start();
$page='freelancer';
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
			<h5>Employers  <span>Profile</span></h5>
			<div class="men-wear-bottom">
				
				<?php
					$id=$_GET['id'];
					$query_statement="SELECT * FROM employer_profile WHERE id='$id'";
					$query= mysqli_query($dbconnect, $query_statement);
					if (mysqli_num_rows($query)==1) {
						$row=mysqli_fetch_assoc($query);
					
				?>

				<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Employer</li>
							<!-- <li>Post Job</li> -->
							<!-- <li>Jobs</li> -->
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Basic Information</h6>
							  <div class="bootstrap-tab-text-grid-left">
											<img src="Employer_pictures/<?php echo $row['photo']; ?>" alt=" " class="img-responsive">
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
												<p><b>Company Name:</b><br> <input type="text" name="company" readonly value="<?php echo $row['company_name'] ?>"> </p>
												<p><b>Position:</b><br> <input type="text" name="position" readonly value="<?php echo $row['Position'] ?>"> </p>
												<p><b>Email:</b><br> <input type="text" name="email" readonly value="<?php echo $email ?>"> </p>
												<p><b>Brief Description:</b>
												<textarea name="description" readonly value="<?php echo $row['Description'] ?>"><?php echo $row['Description'] ?></textarea></p>
											
										</form>
									</div>
							   
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
							  <h6>Post a job</h6>
							   <div class="add-review">
										
										<form action="post_job.php" method="post">
												<p><b>Job Title:</b><br> <input type="text" name="job_title" placeholder="Enter the title of the job"> </p>
												<p><b>Category:</b><br> <input type="text" name="category" placeholder="eg. web project, software development, graphic design etc"> </p>
												<p><b>Amount:</b><br> <input type="text" name="amount" > </p>
												<p><b>Description:</b>
												<textarea name="description" ></textarea></p>
											<!-- <input type="submit" value="POST" name="submit" readonly> -->
										</form>
									</div>
							   
							</div>
						 </div>
						 <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Jobt Lists</h6>
							  <div class="bootstrap-tab-text-grid-left">
											<img src="Employer_pictures/<?php echo $row['photo']; ?>" alt=" " class="img-responsive">
							</div><br>
							<div class="bootstrap-tab-text-grid-right">
											
											
										</div>
										<br>
										<br>
										<br>
										<br>

					<?php
					$query_statement1="SELECT * FROM post_job WHERE email='$email'";
					$query1= mysqli_query($dbconnect, $query_statement1);
					if (mysqli_num_rows($query1)>0) {
					while($row1=mysqli_fetch_assoc($query1)){
					?>		

							   <ul>
							   		<li><b>Job Title: </b><?php echo $row1['job_title']; ?></li><br>
							   		<li><b>Category: </b><?php echo $row1['category']; ?></li><br>
							   		<li><b>Description: </b><?php echo $row1['description']; ?></li><br>
							   		<li><b>Amount: </b><?php echo $row1['amount']; ?></li>

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
			<h3>You don't have an Employers Profile <a href="employer_profile.php">Click here to begin</a></h3>
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