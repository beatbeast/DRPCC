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
                <a href="log-out.php">Log Out</a>
            </div>
          </div>
        </nav> 
   
    <?php
    //start a session
    session_start();
    $userName=$_SESSION['user_name'];
    //check if userName is empty then redirect to login page
    if(empty($userName))
    {
        //redirect to Login page
        header('Location:log-in.php');
    }
    //else print username with welcome message 
    echo "<pre><h2>Welcome $userName</h2></pre>"; 
    ?>
    <div class="container">             
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
        $connect=mysqli_connect('localhost','root','root','windmill_ventures_limited');
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
             <td>
                <!--<button class="btn btn-primary"><a href="view.php?id=<?php //echo $row["id"]; ?>">View</a></button>-->
                <a href="view.php?id=<?php echo $row["id"]; ?>"><button type="view" class="btn btn-primary">View</button></a>
            </td>
            <td>
                <!--<button class="edit btn btn-secondary"><a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a></button>-->
                <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="edit" class="btn btn-success">Edit</button></a>
            </td>
            <td>
                <!--<button class="delete btn btn-danger"><a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a></button>-->
                <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="delete" class="btn btn-danger">Delete</button></a>
            </td> <td>
                <!--<button class="delete btn btn-danger"><a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a></button>-->
                <a href=""><button type="reply" class="btn btn-secondary">Reply</button></a>
            </td>
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
              
<td><?php echo $row['Requested Service'];?></td> <td><?php echo $row['Description Of Service Required'];?></td>

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

