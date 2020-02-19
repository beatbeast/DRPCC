<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Windmill Ventures Limited</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/laolu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

<body>
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
            <td><button class="delete btn btn-danger">Delete</button></td>-->
            <!--<td><button class='edit btn-primary' data-id='$id'>Edit</button></td>
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
             var id=$(this).data('id');             
             $("div[data-id='" + id +"']").hide();
             
          });
          $('.edit').on('click',function (){
             var id=$(this).data('id');             
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

    </body>
<!--<td><?php echo $row['Requested Service'];?></td> <td><?php echo $row['Description Of Service Required'];?></td>
            -->
    </html>