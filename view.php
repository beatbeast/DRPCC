<?php
include("conn.php");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="css/laolu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
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
              <a class="navbar-brand" href="laolu.html">Windmill Ventures Limited</a>
            </div>
            <div float="right" text="white">
                <a href="laolu.html">Home</a> 
              | <a href="adminpage.php">Admin Page</a> 
              | <a href="log-out.php">Logout</a>
            </div>
          </div>
        </nav> 

<div class="form">
<h2>View Records</h2>
<!-- <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>E-mail</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>Message</strong></th>
</thead>
<tbody>
<?php
//$count=1;
//$sel_query="Select * from requests WHERE id=".$id;
//$result = mysqli_query($conn,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php// echo $count; ?></td>
<td align="center"><?php //echo $row["firstname"]; ?></td>
<td align="center"><?php //echo $row["lastname"]; ?></td>
<td align="center"><?php //echo $row["email"]; ?></td>
<td align="center"><?php //echo $row["phonenumber"]; ?></td>
<td align="center"><?php //echo $row["message"]; ?></td>
<td align="center">
<button><a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a></td></button>
</td>
<td align="center">
<button><a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a></button>
</td>
</tr>
<?php //$count++; } ?>
</tbody>
</table> -->

<!-- <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
  </thead>
  <tbody>
<?php
//$count=1;
//$sel_query="Select * from requests WHERE id=".$id;
//$result = mysqli_query($conn,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
    <tr><td><?php //echo $count; ?></td>
    <td><?php //echo $row["firstname"]; ?></td>
    <td><?php //echo $row["lastname"]; ?></td>
    <td><?php //echo $row["email"]; ?></td>
    <td><?php //echo $row["phonenumber"]; ?></td>
    <td><?php //echo $row["message"]; ?></td>
    <td align="center">
<!--<button><a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a></td></button>-->
<!-- <a href="edit.php?id=<?php //echo $row["id"]; ?>"><button type="edit" class="btn btn-success">Edit</button></a>
</td>
<td align="center">
<button><a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a></button>
<a href="delete.php?id=<?php //echo $row["id"]; ?>"><button type="delete" class="btn btn-danger">Delete</button></a>
</td>
    </tr>
    <?php //$count++; } ?>
  </tbody>
</table>
</div>

</div> -->
          
          
              <table class="table table-striped">
                </thead> 
                <tbody>
                  <?php
                      $count=1;
                      $sel_query="Select * from requests WHERE id=".$id;
                      $result = mysqli_query($conn,$sel_query);
                      while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>ID:</td> 
                        <td><?php echo $row["id"]; ?></td>
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
                        <td>Email:</td> 
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td> 
                        <td><?php echo $row["phonenumber"]; ?></td>
                    </tr>
                    <tr>
                        <td>Message: </td> 
                        <td><?php echo $row["message"]; ?></td>
                    </tr>
                    <tr>
                     <td align="">
                        <!--<button><a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a></td></button>-->
                        <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="edit" class="btn btn-success">Edit</button></a>
                        </td>
                        <td align="">
                        <!--<button><a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a></button>-->
                        <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="delete" class="btn btn-danger">Delete</button></a>
                        </td><td align="">
                        <!--<button><a href="mail.php?id=<?php //echo $row["id"]; ?>">Mail</a></button>-->
                        <a href=".php?id=<?php echo $row["id"]; ?>"><button type="reply" class="btn btn-secondry">Reply</button></a>
                        </td>
                      </tr>
    </tr>
    <?php $count++; } ?>
                </tbody>
              </table>
          </div>

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
    padding: 10px;
}
</style>

<div class="footer">
   <p><center><!--©--> &copy; 2018 Copyright: <a href="laolu.html">Windmill Ventures Limited.</a> Designed by: <a href="https://twitter.com/_beatbeast_">@beatbeast</a></center> </p>
</div>    
</body>
</html>



