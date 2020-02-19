<?php
	include('conn.php');
	// $id=$_GET['id'];
	// $id = isset($_GET['id']) ? $_GET['id'] : '';
	$query=mysqli_query($conn,"select * from `users` where id=4");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile.:.<?php echo $row["username"]; ?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/laolu.css">
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"></script>.$id-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/webczar.jpg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap2.3.2.min.js"></script>
  	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, shrink-to-fit=no">
   <style>
     section, div {
  height: ;
}

body {
  color: #dee2e6;
  font-size: 1.25rem;
  line-height: 100%;
}

article {
  position: relative;
  top: 50%;
  bottom: 50%;
  text-align: center;
  transform: translate(0, -50%);
  padding: 0.5rem;
}

h1 {
  font-size: 1.75rem;
  margin: 0 0 0.75rem 0;
}

/* Pattern styles */
.container {
  display: grid;
}

.left-half {
  background: green;
  grid-column: 1;
  padding: 20px;
}

.right-half {
  background: white;
  grid-column: 2;
}
.btn{
    height:100px;
    width:200px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">  
              <a class="navbar-brand" href="index.php">ACUCLOUD</a>
            </div>
            <div float="right" text="white">
                <a href="dashboard.php">Dashboard</a> 
                <a href="log-out.php">Logout</a>
            </div>
          </div>
        </nav> 
  <section class="container">
      <div class="well left-half">
    	   <article>
            <forms action="update.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Profile Picture</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="profile_picture">
                    </div>
                </div>
                <!-- <label><h1>Profile Picture</h1></label><br><br/>
                <input type="images" value="<?php //echo $row['profile_picture']; ?>" name="profile_picture" class="form-control"><br><br/> -->
                <label><h1>First Name</h1></label><br><br/>
                <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" class="form-control"><br><br/>
                <label><h1>Last Name</h1></label><br><br/>
                <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" class="form-control"><br><br/>
                <label><h1>Username</h1></label><br><br/>
                <input type="text" value="<?php echo $row['username']; ?>" name="username" class="form-control"><br><br/>
                <label><h1>Email</h1></label><br><br/>
                <input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control"><br><br/> 
                <label><h1>Phone Number</h1></label><br><br/>
                <input type="text" value="<?php echo $row['telephone']; ?>" name="telephone" class="form-control"><br><br/>           
                <label><h1>Address</h1></label><br><br/>
                <input type="text" value="<?php echo $row['address']; ?>" name="address" class="form-control"><br><br/>            
          </article>
        </div>

        <div class="right-half">
          <article>
          	<div>
        	    <!--<button class="btn btn-primary">Update</button>-->
        	    <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button><Br><br/>
        	    <br><br/>
        	    <br><br/>
        	    <br><br/>
			        <a href="dashboard.php"><button type="back" class="btn btn-danger">Back</button></a><br><br/>
            </div>
        	</article>
        </div>
    </form>
  </div>
      
  </div>
</div>
</section>
<style>
.footer {
    display: block;
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: grey;
    text-align: center;
    padding: 10px;
}
</style>

<div class="footer">
  <p><center><!--©--> &copy; 2018 Copyright: <a href="laolu.html">Windmill Ventures Limited.</a> Designed by: <a href="https://twitter.com/_beatbeast_">@beatbeast</a></center> </p>
</div>    	
</body>
</html>