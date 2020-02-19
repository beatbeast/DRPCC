<?php
    //start a session
    // session_start();
    // $username=$_SESSION['user_name'];
    //check if userName is empty then redirect to login page
    // if(empty($username))
    {
        //redirect to Login page
        // header('Location: log-in.php');
    }
    //else print username with welcome message 
    // echo "<pre><h2>Welcome $username</h2></pre>"; 
    ?>
    
<!doctype html>
<html lang="en">
    <?php include 'modules/header-info.php'; ?>
    <body class=" ">
        <a id="start"></a>
        
        	<?php include 'modules/main-nav.php'; ?>

	        <div class="tab__content">
	            <section class="text-center bg--light">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-sm-10 col-md-8">
	                            <h1>Video Streaming Service</h1>
	                            <p class="lead">
	                                This service allows for selection of video and demonstrates a delay sensitive services.
	                            </p>
	                        </div>
	                    </div>
	                    <!--end of row-->
	                </div>
	                <!--end of container-->
	            </section>
	        </div>

        	<?php include 'modules/video-streaming-section.php'; ?>

            <?php include 'modules/footer.php'; ?>
    
            <?php include 'modules/footer-script.php'; ?>

        </div>
        <!--<div class="loader"></div>-->
        
    </body>
</html>        