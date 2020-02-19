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
			<h5>Freelancers  <span>Profile</span></h5>
			<div class="men-wear-bottom">
				
				




				<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Freelancer</li>
							<!-- <li>Employer</li> -->
							<li>Portfolio</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>Basic Information</h6>
							<p>Fill the form below to create your freelancer profile</p>
							
							<div class="bootstrap-tab-text-grid-right">
											
											
							</div>
										
										

							   <div class="add-review">
										
										<form action="" method="post" enctype="multipart/form-data">
												<p><b>Photo:</b><br> <input type="file" name="photo" required> </p><br>
												<p><b>Surname:</b><br> <input type="text" name="surname" required placeholder="Enter your surname"> </p>
												<p><b>Other Name:</b><br> <input type="text" name="othername" required placeholder="Enter the othername"> </p>
												<p><b>Area of Expertise:</b><br> <input type="text" name="AOE" required placeholder="eg. Web Designer, Software Developer, Graphics Designer, Database Manager etc. put comma to separate more that one"> </p>
												<p><b>Years of Experience:</b><br><input type="text" name="YOE" required placeholder="E.g Six Month or One Year or Two Year"> </p>
												<p><b>Brief Description:</b>
												<textarea name="description" required placeholder="Describe your level of expertise"></textarea></p>
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
	$surname= mysql_real_escape_string($_POST['surname']);
	$othername= mysql_real_escape_string($_POST['othername']);
	$area_of_expertise= mysql_real_escape_string($_POST['AOE']);
	$year_of_experience= mysql_real_escape_string($_POST['YOE']);
	$description= mysql_real_escape_string($_POST['description']);

	$surname=ucwords($surname);
	$othername=ucwords($othername);
	$area_of_expertise=ucwords($area_of_expertise);

	
	//this is the area that handles the picture
	$filename = findexts($_FILES['photo']['name']);

	$randomname= randomname();
	$prefix_name= "free";
	$prefix_name= $prefix_name.$randomname;
	$filename= $prefix_name.'_'.$filename;
			
			//this is the folder name
	$folder = "Freelancer_pictures/";
			 
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


			$query = "INSERT INTO freelancer_profile (surname, othername, email, AOE, YOE, description, photo) 
              VALUES ('$surname', '$othername', '$email', '$area_of_expertise', '$year_of_experience', '$description', '$filename');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Profile Updated Successfully!")
				 	window.location ="freelancer_profile_details.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }



}


?>