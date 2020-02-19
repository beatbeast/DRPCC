<?php

//Determine if the value is set and Not null using isset() i.e user has submitted the form or not
if(isset($_POST['submit'])){


	include('conn.php');
	$id=$_POST['id'];

	//get values of the Registration form submited by user
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$address=$_POST['address'];
 
 $result = mysqli_query($conn,"update `users` SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', telephone='$telephone', address='$address' where id=".$id);
 echo $result;
	if ($result) 
  {
  	header('location:profile.php');
  }
  else{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
?>