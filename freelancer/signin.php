<?php
if(isset($_POST["signin"])){

//Start session
	session_start();
	require ("includes/connection.php");
	
	
	
	//Sanitize the POST values
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	
	//this section will escape the strings from the variables
	$email=mysqli_real_escape_string($dbconnect, $email);
	$password=mysqli_real_escape_string($dbconnect, $password);
	
	//Create query
	$qry="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($dbconnect, $qry);
	//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			$myrow = mysqli_fetch_array($result);
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['useremail'] = $myrow['email'];
			$_SESSION['first_name'] = $myrow['fname'];
			$_SESSION['last_name'] = $myrow['lname'];
			
			
			session_write_close();
			//if ($level="admin"){
			header("location: profile.php");
			exit();
		}else {
?>
			<script type='text/javascript'>
					alert('Invalid Username or Password \n Try again.');
					window.location = "index.php";
			</script>
<?php
		//header("location: index.php");
		}
	}else {
		die("Query failed");
	}

}

?>