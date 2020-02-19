<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
if ($phonenumber === ''){
  print json_encode(array('message' => 'Phone-Number cannot be empty', 'code' => 0));
  exit();
} else {
  function formatPhoneNumber($phonenumber) {
    $phonenumber = preg_replace('/[^0-9]/','',$phonenumber);

    if(!filter_strlen($phonenumber) > 10) {
        $countryCode = substr($phonenumber, 0, strlen($phonenumber)-10);
        $areaCode = substr($phonenumber, -10, 3);
        $nextThree = substr($phonenumber, -7, 3);
        $lastFour = substr($phonenumber, -4, 4);

        $phonenumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phonenumber) == 10) {
        $areaCode = substr($phonenumber, 0, 3);
        $nextThree = substr($phonenumber, 3, 3);
        $lastFour = substr($phonenumber, 6, 4);

        $phonenumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phonenumber) == 7) {
        $nextThree = substr($phonenumber, 0, 3);
        $lastFour = substr($phonenumber, 3, 4);

        $phonenumber = $nextThree.'-'.$lastFour;
    }

    return $phonenumber;
}
}  
}
if ($subject === ''){
  print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
  exit();

if(isset( $_POST['updates'])){
  foreach ($_POST['channel'] as $value) {
      //loop through all checked checkboxes and do logic
  }
}

if(isset( $_POST['cmethod']))
$updates = $_POST['cmethod'];  
}

if(isset( $_POST['updates']))
  $updates = $_POST['updates'];
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "youremail@here.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>