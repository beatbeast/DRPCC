<!Doctype html>
<html>
<head><title>Registration Table</title>
<head>
<body>
<!--php code begins-->
<?php

//Determine if the value is set and Not null using isset() i.e user has submitted the form or not
if(isset($_POST['Register'])){

//get values of the Registration form submited by user

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];

//create a connection with database session using mysqli_connect()
$conn = mysqli_connect("localhost","realreso","Z7tlO5I9.i:Bt0","realreso_drpcc");
//check the connection
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
}

//insert records in user table in session database
$sql="insert into user(firstname,lastname,username,password,email,status,last_login) 
 VALUES('".$firstname."','".$lastname."','".$username."','".$cpassword."','".$email."','0',now())";

//run the above query using mysqli_query()
$result=mysqli_query($conn,$sql);

if($result)
{ 
 echo 'Record has been inserted succesfully';

 //redirect to HOME page
	header('Location:http://realresource.com.ng/log-in.php', true);
}
else
{ 
echo 'Record has not been inserted succesfully'; 
//redirect to HOME page
	header('Location:http://realresource.com.ng/registration.php', true);
}

//close the connection
mysqli_close($conn);
}

else
{
echo 'Please Submit the form first.'; 
}

?>
<!--php code ends-->
</body>
</html>