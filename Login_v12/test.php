  
 
  <?php
  if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['phone'])&&isset($_POST['message'])&&isset($_POST['Gender'])) {
     
      $name = $_POST['name']; 
      $email = $_POST['email']; 
      $phone = $_POST['phone']; 
      $subject = $_POST['subject']; 
      $message = $_POST['message']; 
      $age = $_POST['age']; 
      $gender = $_POST['Gender'];
      
  // 'contact' => 
  //   array (size=2)
  //     0 => string 'email' (length=5)
  //     1 => string 'phone' (length=5)
   
   var_dump($_POST);
    /* if(isset($_POST['gender'])&&($_POST['VALUES']=="male")){
      $gender="male";
     }else if(isset($_POST['gender'])&&($_POST['VALUES']=="female")){
      $gender="female";
     }else{
      $gender="other";
     }*/
     

   }
     if(!empty($name)&&(!empty($email))&&(!empty($phone))&&(!empty($subject))&&(!empty($age))) {
         $conn= mysqli_connect('localhost','root','','loveandcare');
       if(!$conn){
        die("connection failed:".mysqli_connect_error());
      }
   
     mysqli_query ($conn, "INSERT INTO contact (name,email, phone, subject, message, age, gender)
        VALUES ('$name', '$email', '$phone', '$subject', '$message', '$age', '$gender')");

      if(mysqli_affected_rows($conn)>0){
      echo '<p>Thank you for contacting us</p>';
      echo '<a href="index.php">Go Back </a>';
      } else{
      echo 'you have not submitted your details';
      echo mysqli_error($conn);
      } 
  }else{
    echo "<p>all fields required</p>";
    echo '<p><a href="index.php#contact">Go Back </a><p>';
  }
  ?>
