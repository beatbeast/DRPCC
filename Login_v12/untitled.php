<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=windmill_ventures_limited", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 // create a variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$message=$_POST['message'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO requests (firstname, lastname, email, phonenumber, message)
         VALUES ('$form_name','$form_lastname','$form_email', '$form_phone', '$form_message',)");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Message Sent</p>";
 echo '<a href="laolu.html">Go Back</a>';
} else {
 echo "Message NOT Sent<br />";
 echo mysqli_error ($connect);}   
/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
AND ALSO SMTP TO SEND THE EMAILS
*/

require 'PHPMailer-master/PHPMailerAutoload.php';

/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$fromemail = 'demo@domain.com';
$fromname = 'Demo contact form';

// an email address that will receive the email with the output of the form
$sendToEmail = 'demo@domain.com';
$sendToName = 'Demo contact form';

// subject of the email
$subject = 'New message from contact form';

// smtp credentials and server

$smtpHost = 'smtp.gmail.com';
$smtpUsername = 'bolagbemi@gmail.com';
$smtpPassword = 'ayomide';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('form_name' => 'firstname', 'form_lastname' => 'lastname', 'form_email' => 'email', 'form_phone' => 'phonenumber', 'form_message' => 'message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
*  LET'S DO THE SENDING
*/

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(0/*E_ALL & ~E_NOTICE*/);

try
{
    
    if(count($_POST) == 0) {throw new \Exception('Form is empty');}
    
    $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
    $emailTextHtml .= "<table>";
    
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
        }
    }
    $emailTextHtml .= "</table><hr>";
    $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
    
    $mail = new PHPMailer;
    
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
    $mail->addReplyTo($from);
    
    $mail->isHTML(true);
    
    $mail->Subject = $subject;
    $mail->Body    = $emailTextHtml;
    $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
    
    
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    
    //Set the hostname of the mail server
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    $mail->Host = gethostbyname('smtp.gmail.com');
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "bolagbemi@gmail.com";
    
    //Password to use for SMTP authentication
    $mail->Password = ayomide;
    
    
    if(!$mail->send()) {
        throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
    }
    
    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    // $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
// else just display the message
else {
    echo $responseArray["message"];
}
?>


























 
/*
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=windmill_ventures_limited", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
// create a variable
$firstname=$_POST['form_name'];
$lastname=$_POST['form_lastname'];
$email=$_POST['form_email'];
$phonenumber=$_POST['form_phonenumber'];
$message=$_POST['form_message'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO requests (firstname,lastname,email,phonenumber,message)
         VALUES ('$firstname','$lastname','$email','$phonenumber','$message')");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Message Sent</p>";
 echo '<a href="laolu.html">Go Back</a>';
} else {
 echo "Message NOT Sent<br />";
 echo mysqli_error ($connect);
}

*/

/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
AND ALSO SMTP TO SEND THE EMAILS
*/

require 'PHPMailer-master/PHPMailerAutoload.php';

/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$fromemail = 'demo@domain.com';
$fromname = 'Demo contact form';

// an email address that will receive the email with the output of the form
$sendToEmail = 'demo@domain.com';
$sendToName = 'Demo contact form';

// subject of the email
$subject = 'New message from contact form';

// smtp credentials and server

$smtpHost = 'smtp.gmail.com';
$smtpUsername = 'bolagbemi@gmail.com';
$smtpPassword = 'ayomide';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('form_name' => 'firstname', 'form_lastname' => 'lastname', 'form_email' => 'email', 'form_phone' => 'phonenumber', 'form_message' => 'message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
*  LET'S DO THE SENDING
*/

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(0/*E_ALL & ~E_NOTICE*/);

try
{
    
    if(count($_POST) == 0) {throw new \Exception('Form is empty');}
    
    $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
    $emailTextHtml .= "<table>";
    
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
        }
    }
    $emailTextHtml .= "</table><hr>";
    $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
    
    $mail = new PHPMailer;
    
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
    $mail->addReplyTo($from);
    
    $mail->isHTML(true);
    
    $mail->Subject = $subject;
    $mail->Body    = $emailTextHtml;
    $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
    
    
    $mail->isSMTP();
    
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    
    //Set the hostname of the mail server
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    $mail->Host = gethostbyname('smtp.gmail.com');
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "bolagbemi@gmail.com";
    
    //Password to use for SMTP authentication
    $mail->Password = ayomide;
    
    
    if(!$mail->send()) {
        throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
    }
    
    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    // $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
// else just display the message
else {
    echo $responseArray["message"];
}



















<?php
  if (isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['phonenumber'])&&isset($_POST['message'])) {
     
      $firstname = $_POST['firstname']; 
      $lastname = $_POST['lastname']; 
      $email = $_POST['email']; 
      $phonenumber = $_POST['phonenumber']; 
      $message = $_POST['message']; 
      
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
     if(!empty($firstname)&&(!empty($lastname))&&(!empty($email))&&(!empty($phonenumber))&&(!empty($message))) {
         $conn= mysqli_connect('localhost','root','','windmill_ventures_limited');
         $sql = mysql_select_db ('requests',$conn) or die("unable to connect to database");
       if(!$conn){
        die("connection failed:".mysqli_connect_error());
      }
   
     mysqli_query ($conn, "INSERT INTO requests (firstname,lastname,email ,phonenumber ,message)
        VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$message')");

      if(mysqli_affected_rows($conn)>4){
      echo '<p>Request sent</p>';
      echo '<a href="laolu.html">Go Back </a>';
      } else{
      echo 'Request <font color="red">NOT</font> Sent';
      echo mysqli_error($conn);
      } 
  }else{
    echo "<p>Form <font color='red'>NOT</font> filled properly</p>";
    echo '<p><a href="index-3.html">Go Back</a><p>';
  }
  ?>







$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=windmill_ventures_limited", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 $firstname = ($_POST['submit'])mysql_real_escape_string($_POST['firstname']); 
      $lastname = mysql_real_escape_string($_POST['lastname']); 
      $email = mysql_real_escape_string($_POST['email']); 
      $phonenumber = mysql_real_escape_string($_POST['phonenumber']); 
      $message = mysql_real_escape_string($_POST['message']);     
}

if(!empty($firstname)&&(!empty($lastname))&&(!empty($email))&&(!empty($phonenumber))&&(!empty($message))) {
         $conn= mysqli_connect('localhost','root','','windmill_ventures_limited');
         $sql = mysql_select_db ('requests',$conn) or die("unable to connect to database");
       if(!$conn){
        die("connection failed:".mysqli_connect_error());
      }
   
     mysqli_query ($conn, "INSERT INTO requests ('firstname' ,'lastname' ,'email' ,'phonenumber' ,'message')
        VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$message')");

      if(mysqli_affected_rows($conn)==5){
      echo '<p>Request sent</p>';
      echo '<a href="laolu.html">Go Back </a>';
      } else{
      echo 'Request <font color="red">NOT</font> Sent';
      echo mysqli_error($conn);
      } 
  }else{
    echo "<p>Form <font color='red'>NOT</font> filled properly</p>";
    echo '<p><a href="index-3.html">Go Back</a><p>';
  }
