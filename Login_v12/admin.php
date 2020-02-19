<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>Password Protected</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Latest compiled and minified Bootstrap CSS-->

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link rel="icon" href="images/logo1.jpg">
<link rel="stylesheet" type="text/css" href="css/login.css"> 
<!--<script src="js/login.js"></script>-->
<!--<style>


.center-block { float: center; 
}
</style>-->

</head>

<body background-color="black">

<div class="container">

<div class="row">

 

<?php

// Define your username and password here

$username = "beatbeast";

$password = "windmill";

 

if (isset($_POST['txtUsername']) != $username || $_POST['txtPassword'] != $password) {

?>

<!--LOG-IN FORM-->

<div class="col-sm-6 center-block form-group">

<form id="form_id" name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<fieldset>

<!--<legend text="white">Log-In</legend>

 

<p><label for="txtUsername">Username:</label>

<br /><input type="text" class="form-control" title="Enter your Username" name="txtUsername" id="txtUsername" required/></p>

<p><label for="txtPassword">Password:</label>

<br /><input type="password" class="form-control" title="Enter your password" name="txtPassword" id="txtPassword" required/></p>

<button type="submit" class="btn btn-lg btn-primary">Submit</button>-->
<label>User Name :</label>
<input type="text" name="username" id="username"/>
<label>Password :</label>
<input type="password" name="password" id="password"/>
<input type="button" value="Login" id="submit"/>
<!--onclick="validate()"-->

</fieldset>

</form>
<span><b class="note">Note : </b>For this demo use following username and password. <br/><b class="valid">User Name : beatbeast<br/>Password : windmill</b></span>

</div>

</div>

 

<?php
}

else {

?>

<!--PROTECTED CONTENT GOES HERE-->
<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">  
              <a class="navbar-brand" href="laolu.html">Windmill Ventures Limited</a>
            </div>
            <div float="right" text="white">
                <a href="admin.php">Log Out</a>
            </div>
          </div>
        </nav> 
   

<div class="container">
  <h2>Welcome beatbeast</h2>             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/N</th>
        <th>First Name</th>
        <th>Last Name</th> 
        <th>E-mail</th>
        <th>Phone</th>
        <th>Message</th>
       <!-- <th>Requested Service</th>
        <th>Description Of Service Required</th>-->
      </tr>
    </thead>

<?php
    $connect=mysqli_connect('localhost','root','','windmill_ventures_limited');
     if(mysqli_connect_errno($connect)){
        echo "failed to connect to database".mysqli_connect_errno();
     }
     $result=mysqli_query($connect,"SELECT * FROM requests");
    ?>
    <?php while($row= mysqli_fetch_array($result)):?>



    <tbody>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['phonenumber'];?></td>
            <td><?php echo $row['message'];?></td> 
            <!--<td><button class="edit btn btn-secondary">Edit</button></td>
            <td><button class="btn btn-primary">View</button></td>
            <td><button class="delete btn btn-danger">Delete</button></td>
            <td><button class='edit btn-primary' data-id='$id'>Edit</button></td>
            <td><button class='delete btn-danger' data-id='$id'>Delete</button></td>-->
            <td><a href="edit.php?id=<?php echo $row->id; ?>"><button class="btn btn-primary" value="">Edit</button></a></td>
    	<td><a href="delete.php?id=<?php echo $row->id; ?>><button class="btn btn-danger">Delete</button></a></td>
        </tr>
        <?php endwhile;?>
    </tbody>
    
  </table>  

  <script>
        $(document).ready(function (){
          $('.delete').on('click',function (){
             var id = $(this).data('id');  
             $_ajax({
             	url : '',
             	method : 'post',
             	data: {}
             })           
             $("div[data-id='" + id +"']").hide();
             
          });
          $('.edit').on('click',function (){
             var id = $(this).data('id');             
             $("div[data-id='" + id +"']").show();
          });
        });
        
        </script>
              


<style>
.footer {
    display: block;
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: grey;
    text-align: center;
    padding: 10px;
}
</style>

<div class="footer">
  <p><center><!--©--> &copy; 2018 Copyright: Windmill Ventures Limited. Designed by: @beatbeast</center> </p>
</div>    

<?php

}

?>

<!--END PROTECTED CONTENT-->

 

<!--/container--></div>

 

<!--latest jQuery minified-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!--Bootstrap-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>