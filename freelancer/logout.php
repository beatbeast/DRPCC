<?php
	ob_start();
	session_start();
	//require_once ('../includes/connection.php';
	
	
	//this will unset the session created while login in 
	if ( isset($_SESSION['first_name'])) {
		UNSET($_SESSION['first_name']);
		UNSET($_SESSION['useremail']);
		UNSET($_SESSION['last_name']);
	?>
		<script>
			alert("LogOut Successfull!");
			window.location ="index.php";
		</script>

	<?php
		//header("Location: dashboard.php");
		exit;
	}
?>
	