<?php
	//Start session
	
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['first_name'])) {
?>
		<script type='text/javascript'>
			alert('You are not logged in \n Kindly loggin');
			window.location = 'index.php';		
					
		</script>
<?php
	}
	else{

		//session_start();
		$email = $_SESSION['useremail'];
		$fname = $_SESSION['first_name'];
		$lastname = $_SESSION['last_name'];
		
	}
	//require ('../includes/connection.php');
?>