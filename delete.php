<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `requests` where id='$id'");
	header('location:adminpage.php');
?>