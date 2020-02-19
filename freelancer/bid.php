<?php
session_start();
//$page='profile';
//require('header.php');
require ('includes/connection.php'); 
require('usersession.php');

	$id=$_GET['id'];
	require ("functions.php");

	$query_statement="SELECT * FROM post_job WHERE id='$id'";
	$query= mysqli_query($dbconnect, $query_statement);
	$row=mysqli_fetch_assoc($query);

	$company_name=$row['company_name'];
	$employer=$row['employer'];
	$emp_email=$row['email'];
	$job_title=$row['job_title'];
	$category=$row['category'];
	$amount=$row['amount'];
	$description=$row['description'];


	$query_statement1="SELECT * FROM freelancer_profile WHERE email='$email'";
	$query1= mysqli_query($dbconnect, $query_statement1);
	$row1=mysqli_fetch_assoc($query1);

	$free_name=$row1['surname'];
	$free_email=$row1['email'];
	$status="Pending";



	$query = "INSERT INTO bids (company_name, employer, emp_email, job_title, category, amount, description, freelancer_name, freelancer_email, status) 
              VALUES ('$company_name', '$employer', '$email', '$job_title', '$category', '$amount', '$description', '$free_name', '$free_email', '$status');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Bid Made Successfully!")
				 	window.location ="freelancer_profile_details.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }






?>