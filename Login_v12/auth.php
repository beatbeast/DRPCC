<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: log-in.php");
exit(); }
?>
