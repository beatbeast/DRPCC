<?php
include("conn.php");
include("loginmodule.php");

                      $count=1;
                      $sel_query="Select * from users WHERE id=4";
                      $result = mysqli_query($conn,$sel_query);
                      while($row = mysqli_fetch_assoc($result)) { 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile.:.<?php echo $row["username"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: white">
<nav style="background-color: black" class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">  
              <a class="navbar-brand" href="dashboard.php">DYNAMIC RESOURCE PROVISIONING FOR CLOUD COMPUTING</a>
            </div>
            <div float="right" text="white">
                <a href="index.php">Home</a> 
              | <a href="log-out.php">Logout</a>
            </div>
          </div>
        </nav> 
<section class="container-fluid mt-5">
<div class="form">
<h2>View Records</h2>      
              <table class="table table-striped">
                </thead> 
                <tbody>
                  <!-- .$id -->
                    <!-- <tr>
                        <td>ID:</td> 
                        <td><?php //echo $row["id"]; ?></td>
                    </tr> -->
                    <tr>
                        <td>Profile Picture:</td> 
                        <td><?php echo $row["profile_picture"]; ?></td>
                    </tr>
                    <tr>
                        <td>First Name:</td> 
                        <td><?php echo $row["firstname"]; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td> 
                        <td><?php echo $row["lastname"]; ?></td>
                    </tr>
                    <tr>
                        <td>Username:</td> 
                        <td><?php echo $row["username"]; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td> 
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td> 
                        <td><?php echo $row["telephone"]; ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td> 
                        <td><?php echo $row["address"]; ?></td>
                    </tr>
                    <tr>
                      <td align="">
                        <!--<button><a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a></td></button><?php echo $row["id"]; ?>-->
                        <a href="edit.php?id=4"><button type="edit" class="btn btn-success">Edit Profile</button></a>
                        </td>
                        </td>
                    </tr>
    </tr>
    <?php $count++; } ?>
                </tbody>
              </table>
          </div>
</section>
<style>
.footer {
    display: block;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: grey;
    text-align: center;
    padding: 5px;
}
</style>

<div class="footer">
   <p><center><!--©--> &copy; 2019 Copyright: <a href="beatbeast.php">beatbeast</a></center> </p>
</div>    
</body>
</html>



