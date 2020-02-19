 <?php
 //start a session
 session_start();

//sore the value of user in session super globals
 $userName=$_SESSION['email'];

//check if userName is empty then redirect to login page
 if(empty($userName))
 {
  //redirect to Login page
  header('Location:log-in.php');
 }

//else print username with welcome message 
  echo "welcome $userName"; 
 ?>
<?php
    try{
   require_once'conn.php';
   $id=$_GET['id'];
   $sql= 'SELECT id, firstname, lastname, email, phonenumber, message FROM requests WHERE id=' . $id . ' LIMIT 1';
   $result=$db->query($sql);
   // $result->bindValue(":id", $edit);

   $numrows = $result->rowCount();

   //set fetch mode
   $result->setFetchMode(PDO::FETCH_OBJ); 
   $errorInfo=$db->errorInfo();
  }  
   catch(Exception $e){
   $error = $e->getMessage();

   } 
     while ( $row=$result-> fetch()) {
     $id= $row->id ;
     $firstnamename=  $row->firstname;
     $lastname=$row->lastname;
     $email= $row->email;
     $phonenumber=$row->phonenumber;
     $message=$row->message;
     };
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <header class="border" style="background-color:gray">
        <img src="images/logo1.jpg" class="img border" alt="logo" width="55" >
    </header><br><br/> 
    <div class="row">
          <div class="col-lg-2 text-center" style="background-color:#eee;">
                <br><br/>
                
                <h2>Dashboard</h2>
                <br></br>
                <?php echo "<strong>Details For: $firstname </strong>" ?>
                
                <br><br/>
                <form>
                  <input type="Search" name="search" placeholder="Search">
                  <button class="btn btn-primary">Search</button>
                </form>
                <br><br/>
                LINKS
                <a href="index.php"><p>Visit Main Site</p></a>
                <a href="#"><p>View Volunteers</p></a>
                <a href="#"><p>Logout</p></a>
          </div>
          <div class="col-lg-10 ">
            <div>
              <a href="pdo_loop.php">Go Back</a>
              <br/>
               <td><a href="edit.php?id=<?php echo $id; ?>"><i class="fa fa-edit prefix grey-text">Edit</i></a></td><!-- update -->
               <td><a href="delete.php?id=<?php echo $id; ?>"><i class="fa fa-trash prefix grey-text">Delete</i></a></td><!-- delete -->

              
            </div>
          
          
              <table class="table table-striped">
                <thead class="thead-dark">

                  <tr>
                    <th>Info </th> 
                    <th>Details for <?php echo "<strong> $firstname; </strong>" ?></th> 
                  </tr>
                </thead> 
                <tbody>
                    <tr>
                        <td>ID</td> 
                        <td><?php echo $id;?></td>
                    </tr>
                    <tr>
                        <td>Name</td> 
                        <td><?php echo $name;?></td>
                    </tr>
                    <tr>
                        <td>Email</td> 
                        <td><?php $email;?></td>
                    </tr>
                    <tr>
                        <td>Phone</td> 
                        <td><?php echo $phone;?></td>
                    </tr>
                     <tr>
                        <td>Subject</td> 
                        <td><?php echo $subject;?></td>
                    </tr>
                    <tr>
                        <td>Message</td> 
                        <td><?php echo $message;?></td>
                    </tr>
                    <tr>
                        <td>Age</td> 
                        <td><?php echo $age;?></td>
                    </tr>
                    <tr>
                        <td>Gender</td> 
                        <td><?php echo $gender;?></td>
                    </tr>
                    <tr>
                        <td>Contact Method</td> 
                        <td><?php echo $contact;?></td>
                    </tr>
                    <tr>
                        <td>Date</td> 
                        <td><?php echo $datein;?></td>
                    </tr>
                </tbody>
              </table>
          </div>
    </div>
</body>
</html>
