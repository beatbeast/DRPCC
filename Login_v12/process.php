<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = ($username);
$password = ($password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from login WHERE username='$username' AND password='$password'");
}
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: adminspage.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
}
mysqli_close($connection); // Closing Connection
?>