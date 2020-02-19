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
			<h5>Employers  <span>Profile</span></h5>
			<div class="men-wear-bottom">
				
				




				<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Employer</li>
							<!-- <li>Employer</li> -->
							<li>Portfolio</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Basic Information</h6>
							<p>Fill the form below to create your Employer profile</p>
							
							<div class="bootstrap-tab-text-grid-right">
											
											
							</div>
										
										

							   <div class="add-review">
										
										<form action="" method="post" enctype="multipart/form-data">
												<p><b>Photo:</b><br> <input type="file" name="photo" required> </p><br>
												<p><b>Surname:</b><br> <input type="text" name="surname" required placeholder="Enter your surname"> </p>
												<p><b>Other Name:</b><br> <input type="text" name="othername" required placeholder="Enter the othername"> </p>
												<p><b>Company's Name:</b><br> <input type="text" name="company_name" required placeholder="enter the name of your company"> </p>

												<p><b>Position:</b><br><input type="text" name="position" required placeholder="state Your position in the company"> </p>
												<p><b>Brief Description:</b>
												<textarea name="description" required placeholder="Describe what is done in your company"></textarea></p>
											<input type="submit" value="UPDATE" name="update">
										</form>
									</div>
							   
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
							  <h6>Portfolios Profiles</h6>
							   <p>this is one of the portforlios of the person in question.</p>
							   
							</div>
						 </div>
						   
						</div>
					</div>
				</div>


			
			
			
					

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

if (isset($_POST['update'])){

	require ("functions.php");
	$surname= mysqli_real_escape_string($dbconnect, $_POST['surname']);
	$othername= mysqli_real_escape_string($dbconnect, $_POST['othername']);
	$company_name= mysqli_real_escape_string($dbconnect, $_POST['company_name']);
	$position= mysqli_real_escape_string($dbconnect, $_POST['position']);
	$description= mysqli_real_escape_string($dbconnect, $_POST['description']);

	$surname=ucwords($surname);
	$othername=ucwords($othername);
	$company_name=ucwords($company_name);

	
	//this is the area that handles the picture
	$filename = findexts($_FILES['photo']['name']);

	$randomname= randomname();
	$prefix_name= "emp";
	$prefix_name= $prefix_name.$randomname;
	$filename= $prefix_name.'_'.$filename;
			
			//this is the folder name
	$folder = "Employer_pictures/";
			 
	$folder= $folder.$filename;
			 
			//this section will check if the file was copied to the target folder
			$move=(move_uploaded_file($_FILES['photo']['tmp_name'], $folder));
			if ($move){
				echo'';
			}
			else{
				?>
				<script type='text/javascript'>
					alert('Problem Uploading  your picture \n try again!');
					
					window.location = 'freelancer_profile.php';
				</script>

				<?php

				  //echo "Pictures was not uploaded";
				  exit();
			  }


			$query = "INSERT INTO employer_profile (surname, othername, email, company_name, position, description, photo) 
              VALUES ('$surname', '$othername', '$email', '$company_name', '$position', '$description', '$filename');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Profile Updated Successfully!")
				 	window.location ="employer_profile_details.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }



}


?>