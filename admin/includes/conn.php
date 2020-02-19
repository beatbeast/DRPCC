<?php
	$conn = new mysqli('localhost', 'root', '', 'acucloud');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>