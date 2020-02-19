<?php
session_start();
//$page='profile';
//require('header.php');
require ('includes/connection.php'); 
require('usersession.php');

if (isset($_POST['submit'])){

	require ("functions.php");
	$job_title= mysqli_real_escape_string($dbconnect, $_POST['job_title']);
	$category= mysqli_real_escape_string($dbconnect, $_POST['category']);
	$amount= mysqli_real_escape_string($dbconnect, $_POST['amount']);
	//$position= mysqli_real_escape_string($dbconnect, $_POST['position']);
	$description= mysqli_real_escape_string($dbconnect, $_POST['description']);

	$query_statement="SELECT * FROM employer_profile WHERE email='$email'";
	$query= mysqli_query($dbconnect, $query_statement);
	$row=mysqli_fetch_assoc($query);
					
	//
	$employer=$row['surname'];
	$company= $row['company_name'];
	echo $employer;
	echo $company;


	
	

			$query = "INSERT INTO post_job (company_name, employer, email, job_title, category, amount, description) 
              VALUES ('$company', '$employer', '$email', '$job_title', '$category', '$amount', '$description');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Job Posted Successfully!")
				 	window.location ="employer_profile_details.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }



}


?>