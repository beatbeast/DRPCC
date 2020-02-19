<!-- <?php
    //start a session
    // session_start();
    // $username=$_SESSION['user_name'];
    // //check if userName is empty then redirect to login page
    // if(empty($username))
    // {
    //     //redirect to Login page
    //     header('Location: log-in.php');
    // }
    //else print username with welcome message
    // echo "<pre><h2>Welcome $username</h2></pre>";
    ?> -->


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DYNAMIC RESOURCE PROVISIONING FOR CLOUD COMPUTING</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="DYNAMIC RESOURCE PROVISIONING FOR CLOUD COMPUTING">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Favicon -->
        <link rel="icon" href="img/webczar.jpg">
    </head>
    <body class=" ">
        <a id="start"></a>
        <div class="nav-container ">
            <nav class="bar bar-4 bar--transparent bar--absolute" data-fixed-at="200">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-4 col-xs-offset-4">
                            <div class="bar__module">
                                <a href="index.php">
                                    <img class="logo logo-dark" alt="logo" src="img/webczar.jpg" />
                                    <img class="logo logo-light" alt="logo" src="img/webczar.jpg" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-8 col-md-offset-0 col-sm-7 col-sm-offset-0 col-xs-10 col-xs-offset-2">
                            <div class="bar__module">
                                <a class="btn btn--sm type--uppercase" href="index.php">
                                    <span class="btn__text">
                                        Homepage
                                    </span>
                                </a>
                                <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Contact
                                    </span>
                                </a>
                                <a class="btn btn--sm btn-danger type--uppercase" href="log-out.php">
                                    <span class="btn__text">
                                        Log-Out
                                    </span>
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>
        <div class="tabs-container text-center" data-content-align="left">
            <div class="tab__content">
                <section class="text-center bg--dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="storage.php" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Cloud"></i>
                                        <span class="h5 color--primary">Storage</span>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="col-sm-6">
                                <a href="#" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Handshake"></i>
                                        <span class="h5 color--primary">Implementations</span>
                                    </div>
                                </a>
                            </div> -->
                            <div class="col-sm-6">
                                <a href="eris/index.php" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Phone"></i>
                                        <span class="h5 color--primary">ERIS</span>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="col-sm-6">
                                <a href="#" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Calendar"></i>
                                        <span class="h5 color--primary">EMS</span>
                                    </div>
                                </a>
                            </div> -->
                            <div class="col-sm-6">
                                <a href="freelancer/index.php" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Checked-User"></i>
                                        <span class="h5 color--primary">Freelancer</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="streaming.php" class="block">
                                    <div class="feature boxed boxed--border border--round">
                                        <i class="icon--lg icon-Monitor"></i>
                                        <span class="h5 color--primary">Video Streaming</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </section>
            </div>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>

        <?php include 'modules/footer.php'; ?>

        <?php include 'modules/footer-script.php'; ?>
    </body>
</html>