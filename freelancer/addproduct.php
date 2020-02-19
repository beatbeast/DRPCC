<?php  require ('includes/connection.php')    ?>

<?php
	
    if (isset($_POST["place_advert"])){

    	require ("functions.php");
    		//this will assign the values in the form into variables
            $email = $_POST['email'];
            $product_name = $_POST['product_name'];
            $product_type = $_POST['product_type'];
			$normal_price = $_POST['normal_price'];
            $high_price = $_POST['high_price'];
            $Description = $_POST['description'];
            
			//this section will escape the strings in the variables
			$email=mysql_real_escape_string($email);
			$product_name=mysql_real_escape_string($product_name);
			$product_type=mysql_real_escape_string($product_type);
			$normal_price=mysql_real_escape_string($normal_price);
			$high_price=mysql_real_escape_string($high_price);
			$Description=mysql_real_escape_string($Description);
			
			$product_id= randomname();
			$time = date('D d-M-Y h:i:s a', time());
			
			
			//this function will generate a random name for the picture
			$filename1 = findexts($_FILES['file1']['name']) ;
			$filename2 = findexts($_FILES['file2']['name']) ;
			$filename3 = findexts($_FILES['file3']['name']) ;
			 
			
			//this will handle the first file
			//this will generate a unique name for saving the pics
			$randomname1= randomname();
			$prefix_name1= "pic1";
			$prefix_name1= $prefix_name1.$randomname1;
			$filename1= $prefix_name1.'_'.$filename1;
			
			//this is the folder name
			$folder1 = "product_pictures/";
			 
			$folder1= $folder1.$filename1;
			 
			//this section will check if the file was copied to the target folder
			$move=(move_uploaded_file($_FILES['file1']['tmp_name'], $folder1));
			if ($move){
				echo'';
			}
			else{
				?>
				<script type='text/javascript'>
					alert('Problem Uploading  first picture \n try again!');
					
					window.location = 'profile.php';
				</script>

				<?php

				  //echo "Pictures was not uploaded";
				  exit();
			  }

			
			


			//this will handle the first file
			//this will generate a unique name for saving the pics
			$randomname2= randomname();
			$prefix_name2= "pic2";
			$prefix_name2= $prefix_name2.$randomname2;
			$filename2= $prefix_name2.'_'.$filename2;
			
			//this is the folder name
			$folder2= "product_pictures/";
			 
			$folder2= $folder2.$filename2;
			 
			 //this section will check if the file was copied to the target folder
			 $move=(move_uploaded_file($_FILES['file2']['tmp_name'], $folder2));
			if ($move){
				echo'';
			}
			else{
				 ?>
				<script type='text/javascript'>
					alert('Problem Uploading  second picture \n try again!');
					
					window.location = 'profile.php';
				</script>

				<?php
			  }


			  


			//this will handle the first file
			//this will generate a unique name for saving the pics
			$randomname3= randomname();
			$prefix_name3= "pic3";
			$prefix_name3= $prefix_name3.$randomname3;
			$filename3= $prefix_name3.'_'.$filename3;
			
			//this is the folder name
			$folder3 = "product_pictures/";
			 
			$folder3= $folder3.$filename3;
			 
			 //this section will check if the file was copied to the target folder
			 $move=(move_uploaded_file($_FILES['file3']['tmp_name'], $folder3));
			if ($move){
				echo'';
			}
			else{
				?>
				<script type='text/javascript'>
					alert('Problem Uploading  third picture \n try again!');
					
					window.location = 'profile.php';
				</script>

				<?php
			  }


			  //this will save the first picture in the database
				$query1 = "INSERT INTO product_picture (pic_name, product_id, email) 
              VALUES ('$filename1', '$product_id', '$email');";
              $result1 = mysqli_query($dbconnect, $query1);
              if (!$result1) {
                die("Database Query Error: " . mysqli_error());
              }
              else
			  {
				echo "";
			  }




			  //this will insert the values from the second picture into the database
			  $query2 = "INSERT INTO product_picture (pic_name, product_id, email) 
              VALUES ('$filename2', '$product_id', '$email');";
              $result2 = mysqli_query($dbconnect, $query2);
              if (!$result2) {
                die("Database Query Error: " . mysqli_error());
              }
              else
			  {
				echo '';
			  }
			




			  //this will insert the of the value of the third picture into the picture database
			  $query3 = "INSERT INTO product_picture (pic_name, product_id, email) 
              VALUES ('$filename3', '$product_id', '$email');";
              $result3 = mysqli_query($dbconnect, $query3);
              if (!$result3) {
                die("Database Query Error: " . mysqli_error());
              }
              else
			  {
				echo"";
			  }
			
			//this section will insert product information into the database the values into the database
			$query = "INSERT INTO product_advert (email, Product_id, Product_name, product_type, Normal_price, High_price, Description, time) 
              VALUES ('$email', '$product_id', '$product_name', '$product_type', '$normal_price', '$high_price', '$Description', '$time');";
              $result = mysqli_query($dbconnect, $query);
              if (!$result) {
                die("Database Query Error: " . mysqli_error());
       			}
              else
			  {
			  	?>
				 <script>
				 	alert("Product Added Successfully!")
				 	window.location ="viewadvert.php";
				 </script>
				<?php
				 //header ('location: register.php?add=2') ;
				  
			  }

    }
          
?>