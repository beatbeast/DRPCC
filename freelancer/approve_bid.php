<?php
session_start();
//$page='profile';
//require('header.php');
require ('includes/connection.php'); 
require('usersession.php');

	$id=$_GET['id'];
	require ("functions.php");
	$status="Approved";

	


	$query = "UPDATE bids SET status='$status' WHERE id = $id;";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Bid approved Successfully Successfully!")
				 	window.location ="employer_profile_details.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }






?>