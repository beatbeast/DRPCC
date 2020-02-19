<?php

// if not empty errors
// if(!empty($errors)){
//     echo "<ul>";
//     foreach ($errors as $error) {
//         echo "<li class=\"error\">".$error."</li>";
//     }
//     echo "<ul>";
// }
    $string = "mysql:dbname=windmill_ventures_limited;host=localhost";
    $user = 'root';
    $password = '';
    try{
         $db = new PDO($string, $user, $password);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
     catch (PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
         die();
     }
 if (isset($_POST['name'])
         &&isset($_POST['lastname'])
         &&isset($_POST['email'])
         &&isset($_POST['password'])) {
      $firstname = htmlspecialchars($_POST['firstname']); 
      $lastname = htmlspecialchars($_POST['lastname']); 
      $email = htmlspecialchars($_POST['email']); 
      $password = htmlspecialchars($_POST['password']);
      

      $errors=array();
      $db = new $db;
      //query for email uniqueness
      $db->query('select email FROM register WHERE email =:email');
      $db->bind(':email',$email);
      $db->execute();
      if ($db->rowcount()>0) {
          $errors= "Sorry, email exist";
      }
 }

 else if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
         }


         if(!empty($firstname)&&empty($errors)
                        &&(!empty($email))
                        &&(!empty($lastname))
                        &&(!empty($email))
                        &&(!empty($password))){
            $hash_pass=md5($password);

         $result=$db->query("INSERT INTO register
                                               (name, 
                                                lastname, 
                                                email, 
                                                password,  
                                                date_registered)
                            VALUES
                                   (:name, 
                                    :lastname,
                                    :email, 
                                    :password, 
                                    :date_registered, 
                                    ) ");
          $result->bind(':name',$name);
          $result->bind(':lastname',$lastname);
          $result->bind(':email',$email);
          $result->bind(':password',$hash_pass);
          $result->bind(':date_registered',now());

          $result->execute();
          if ($db->lastInsertId()) {
              echo "registered successfully";
          }
         }
     }
   
 
?> 