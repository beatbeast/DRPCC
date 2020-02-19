<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
     <title>Windmill Ventures Limited</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/mdb.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
     <link rel="icon"  href="images/logo1.jpg">
<style>
    .content {
    max-width: 500px;
    margin: auto;
    background: white;
    padding-top: 200px;
    
    }
       
</style>
</head>
<body>
	
     <main>
        <div class="content text-center" style="background-color: #fff">
            <section class="form-light">
                <div class="card text-center">

                    

                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="pink-text mb-5"><strong>Register</strong></h3>
                        </div>
                        <form action="adminregprocess.php" method="POST">
                            <div class="md-form">
                                <input type="text" id="Form-email2" class="form-control" name="firstname" required>
                                <label for="Form-email2">Your Firstname</label>
                            </div><div class="md-form">
                                <input type="text" id="Form-email2" class="form-control" name="lastname" required>
                                <label for="Form-email2">Your Lastname</label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="Form-email2" class="form-control" name="email" required>
                                <label for="Form-email2">Your email</label>
                            </div>

                            <div class="md-form pb-3">
                                <input type="password" id="Form-pass2" class="form-control" name="password" required>
                                <label for="Form-pass2">Your password</label>
                            </div>
                            <br/>

                             <div class="row d-flex align-items-center mb-4">
                                <div class="col-md-3 col-md-6 text-center">
                                    <button class="btn btn-pink btn-block btn-rounded z-depth-1" name="submit">Register</button>
                                </div>
                        
                                <div class="col-md-6">
                                    <p class="font-small grey-text d-flex justify-content-end">Have an account? <a href="loginn.php" class="blue-text ml-1">Login</a></p>
                                </div>
                            </div>
                        </form>

                    </div>
                
                </div>
            </section>
        </div>
     </main>
	 <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	 <script type="text/javascript" src="js/popper.min.js"></script>
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>