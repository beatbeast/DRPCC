
<?php
//create a connection with session database in MYSQLi

$conn=mysqli_connect("localhost","root","","windmill_ventures_limited");
if(!$conn)
{
  die("error in establishing the connection :". mysqli_connect_error());
}
//check the user
if(isset($_POST['login']))
{
  //removing special charachter from username and password field of Login form in order to free from sql injection 
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  
  $sql="select * from register where username='".$username."' AND password='".$password."'";
  
  $run_query=mysqli_query($conn,$sql);
  //check user
  if((mysqli_num_rows($run_query))>0)
  {
    //create a session
        session_start();
    //store the username in SESSION global variable
    $_SESSION['user_name']=$username;
    
    $session=$_SESSION['user_name'];
    
    //redirect to HOME page
    header('Location:adminpage.php');
  }
  else
     echo "wrong username or password";
  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Record Update</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
   <header class="border" style="background-color:gray">
        <img src="../image/logo.jpg" class="img border" alt="logo" width="55" >
    </header><br><br/> 
    <div class="row">
          <div class="col-lg-2 text-center" style="background-color:#eee;">
                <br><br/>
                
                <h2>Dashboard</h2>
                <br></br>
                <?php echo "<strong>Details For: $name </strong>" ?>
                
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
    <!-- <form action="update.php" method="POST"> -->
      <div>
        <a href="adminview.php?id=<?php echo($id) ?>">Go back</a>
      </div>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
    try{
   require_once'pdo_connect.php';
   if(isset($_POST['update'])){
    $edit=$_GET['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $contact=$_POST['contact'];
   }
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql= $db->prepare("UPDATE contact SET name=:name, email= :email, phone=:phone, contact=:contact WHERE id= :id");
   $sql->bindValue(":id", $edit);
   $sql->bindValue(":name", $name);
   $sql->bindValue(":email", $email);
   $sql->bindValue(":phone", $phone);
   $sql->bindValue(":contact", $contact);

   $sql->execute();

    if ($sql) {
        echo "Updated Successfully";
    }
    else{
        echo "Could not update, try again";
      }
   
  }  
   catch(Exception $e){
   $error = $e->getMessage();
   } 
?>
      	<table class="table table-striped">
          <thead>
             <tr>
              <th>Info </th> 
              <th>Update/Edit <?php echo "<strong> $name </strong>" ?> Details</th> 
            </tr>
          </thead> 
          <tbody>
              <tr>
                  <td>ID</td> 
                  <td><?php echo $id;?></td>
              </tr>
              <tr>
                  <td>Name</td> 
                  <td><input type="name" name="name" value="<?php echo $name;?>" required></td>
              </tr>
              <tr>
                  <td>Email</td> 
                  <td><input type="email" name="email" value="<?php echo $email;?>" required></td>
              </tr>
              <tr>
                  <td>Phone</td> 
                  <td><input type="text" name="phone" value="<?php echo $phone;?>" required></td>
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
                  <td><input type="name" name="contact" value="<?php echo $contact;?>" required></td>
              </tr>
              <tr>
                  <td>Date</td> 
                  <td><?php echo $datein;?></td>
              </tr>
              <tr>
              <td><a href="update.php?id=<?php echo $id; ?>"><button class="btn btn-primary " value="update" name="update">Update</button></a></td>
              <td><a href="delete.php?id=<?php echo $id; ?>"><i class="fa fa-empty prefix grey-text"></i></a></td>
              </tr>
          </tbody>
        </table>
  </form>
</div>
</body>
</html>
