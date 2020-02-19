<html>

	<head>
	<title>Login</title>

	</head>
	<body>
	
	<?php

	// Check if username and password are correct
	if ($_POST["username"] == "windmill" && $_POST["password"] == "windmill") {
	 
	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "<p><a href='adminpage.php'>ADMIN PAGE</a></p>";
	 
	}
	else {
	 
	// If not correct, we set the session to NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<h1>You are NOT logged correctly in </h1>";
	  echo "<p><a href='document.php'>Link to protected file</a></p>";
	 
	}

	?>

	</body>
	</html>

	