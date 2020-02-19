<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();
 
if (login_check($mysqli) && $_SESSION['is_admin'] == 1 )  : ?>

 <?php
 echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['<a href="adminpage.php">username</a>']) . '.</p>';
 echo '<p>Do you want to change user? <a href="logout.php">Log out</a>.</p>';
  ?>
  <!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="css/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="process_login.php" method="post" name="login_form">                      
            Email: <input class="form input" type="text" name="email" />
            Password: <input class="form input" type="password" 
                             name="password" 
                             id="password"/>
            <input class="form button" type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>     
    </body>
</html>
<?php else : ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="css/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <script type="text/JavaScript" src="js/main.js"></script> 
    </head>
    <body class="container login-page">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form class="form" action="process_login.php" method="post" name="login_form">                      
            Email: <input class="form input" class="form input" type="text" name="email" />
            Password: <input class="form input" class="form input" type="password" 
                             name="password" 
                             id="password"/>
            <input class="form button" type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
        
        <?php
        // echo '<p>Currently logged ' . $logged . '.</p>';
         echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
        ?>      
    </body>
</html>

<?php endif; ?>
