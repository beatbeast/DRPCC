<?php
    include('conn.php');
 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];
 
    mysqli_query($conn,"insert into `requests` (firstname,lastname,email,phonenumber,message) values ('$firstname','$lastname','$email','$phonenumber','$message')");
    header('location:adminpage.php');
 
?>