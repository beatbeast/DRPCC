<?php require_once("configuration.php"); ?>
<?php
	//creatinh a connection to the database.
	$dbconnect = mysqli_connect(DBHOST, DBUSER, DBAUTH, DBNAME);
	if (!$dbconnect) {
		die("Database connection failed: " . mysqlI_error());
	}
	else{
		echo '';
	}
	
	//session_start();
?>