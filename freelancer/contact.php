<?php
session_start();
$page='contact';
 	require('header.php');
 ?>

<!-- //Modal2 -->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>C<span>ontact Us </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">Home</a><i>|</i></li>
								<li>Contact</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
   <!--/contact-->
    
	   
   <div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-6 address-grid">
						<h4>For More <span>Information</span></h4>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Telephone </p><span>+234 8180 361 376</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Mail </p><a href="mailto:Favourtunde999@yahoo.com">Favourtunde999@yahoo.com</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mail-agileits-w3layouts">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Location</p><span>Floor 15, Femi Johnson building. Dugbe Ibadan</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							                              <li class="share">SHARE ON : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					</div>
					<div class="col-md-6 contact-form">
						<h4 class="white-w3ls">Contact <span>Form</span></h4>
						<form action="" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="subject" required="">
								<label>Subject</label>
								<span></span>
							</div>
							<div class="styled-input">
								<textarea name="message" required=""></textarea>
								<label>Message</label>
								<span></span>
							</div>	 
							<input type="submit" name='send' value="SEND">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->
<!--/grids-->
<!--grids-->
<!-- footer -->

<?php
require ('footer.php');
?>
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
