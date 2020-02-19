<?php  require ('includes/connection.php')    ?>


<?php
            if(isset($_POST['send'])){
            //this will assign the string from the form into a variable
			$name = $_POST['name'];
			//$lname = $_POST['lname'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
			
			
            //this will escape the strings from the form
			$name = mysqli_real_escape_string($dbconnect, $name);
			//$lname = mysqli_real_escape_string($dbconnect, $lname);
			$email = mysqli_real_escape_string($dbconnect, $email);
			$subject = mysqli_real_escape_string($dbconnect, $subject);
			$message = mysqli_real_escape_string($dbconnect, $message);
			$date = date('D d-M-Y h:i:s a', time());
        	
        	echo $name;
        	echo $email;
        	echo $subject;
        	echo $message;
              //this section will insert the values into the database
              $query = "INSERT INTO contact (name, email, subject, message, date) 
              VALUES ('$name', '$email', '$subject', '$message', '$date');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
              }
              else
			  {
			?>
				<script type='text/javascript'>
					alert('Message Sent!');
					
					window.location = 'contact.php';
				</script>
			<?php
			  }
			}
                        
?>