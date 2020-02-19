<!Doctype html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="icon" href="img/webczar.jpg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/registration.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


			<div class="container">	
				<p><center><strong>Registration</strong></center></p>				
				<div class="main-login main-center">					
					<form action="registerre.php" method="POST" class="form-horizontal">						
						<div class="form-group">
							<label for="firstname" class="cols-sm-2 control-label">Your First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" name="firstname" class="form-control" id="firstname"  placeholder="Enter your First Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="lastname" class="cols-sm-2 control-label">Your Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" name="lastname" class="form-control" id="lastname"  placeholder="Enter your Last Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" name="username" class="form-control" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" name="email" class="form-control" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" onkeyup='check();'/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="cpassword" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm your Password" onkeyup='check();'/>
								</div>
							</div>
						</div>
						<div class="form-group" id='message'>
						</div>

						<div class="form-group ">
							<button  type="submit" name="Register" value="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
						Already have an account?
				            <a href="log-in.php">Login</a>
				         </div>
					</form>
				</div>
			</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript">
			var check = function() {
				if (document.getElementById('password').value ==
					document.getElementById('confirm_password').value) {
					document.getElementById('message').style.color = 'green';
					document.getElementById('message').innerHTML = 'Passwords match';
				} else {
						document.getElementById('message').style.color = 'red';
					document.getElementById('message').innerHTML = 'Passwords do not match';
				}
			}
		</script>
		

</body>
</html>