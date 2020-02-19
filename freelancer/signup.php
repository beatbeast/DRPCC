<?php

if (isset($_POST['signup'])){
//this will recieve the values from the form and save them into their corresponding variables
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
			$password1 = $_POST['password1'];
           
			$date = date('D d-M-Y h:i:s a', time());
			
			//this section will escape the strings in the variables
			$fname=mysqli_real_escape_string($dbconnect, $fname);
			$lname=mysqli_real_escape_string($dbconnect, $lname);
			$email=mysqli_real_escape_string($dbconnect, $email);
			$password=mysqli_real_escape_string($dbconnect, $password);
			$password1=mysqli_real_escape_string($dbconnect, $password1);

			//this will query the database and check if the email already exist
			$qry="SELECT * FROM users WHERE email='$email'";
			$result=mysqli_query($dbconnect, $qry);
			//this is the condition for the query
			if($result) {
				if(mysqli_num_rows($result) > 0) {
					?>
					<script type='text/javascript'>
					alert('This Email is already taken');
					
					window.location = 'index.php';
					</script>
		<?php	
		exit;	
				}
			}

			
              //this section will insert the values into the database
              $query = "INSERT INTO Users (fname, lname, email, password, date) 
              VALUES ('$fname', '$lname', '$email', '$password', '$date');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
              }
              else
			  {
				?>
				<script type='text/javascript'>
					alert('Profile Created Successfully');
					
					window.location ='index.php'
				</script>
				<?php
					
			  }

			}
        
          
	?> 