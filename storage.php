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


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/webczar.jpg">
<title>DRPCC.:.Online File Storage</title>
</head>
<?php include 'modules/header-info.php'; ?>
<?php
//Load the settings
require_once("settings.php");
$uploadFolder = "uploads/";

$message = "";

//Has the user uploaded something?
if(isset($_FILES['file']))
{
$target_path = $uploadFolder;
$target_path = $target_path . time() . '_' . basename( $_FILES['file']['name']);

//Check the password to verify legal upload Settings::
// if($_POST['password'] != Settings::$password)
// {
//     $message = "Invalid Password!";
// }
// else
// {
//Try to move the uploaded file into the designated folder
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $message = "The file ".  basename( $_FILES['file']['name']).
            " has been uploaded";
        } else{
            $message = "There was an error uploading the file, please try again!";
        }
    }
// }
if(strlen($message) > 0)
{
    $message = '<p class="error">' . $message . '</p>';
}
/** LIST UPLOADED FILES **/
$uploaded_files = "";

//Open directory for reading
$dh = opendir(Settings::$uploadFolder);
//LOOP through the files , $parts[2])
while (($file = readdir($dh)) !== false)
{
    if($file != '.' && $file != '..')
{
$filename = Settings::$uploadFolder . $file;
$parts = explode("_", $file);
$size = formatBytes(filesize($filename));
$added = date("m/d/Y");
$origName = $parts[0];
$filetype = getFileType(substr($file, strlen($file) - 3));
$uploaded_files .= "<li class=\"$filetype\"><a href=\"$filename\">$origName</a> $size - $added</li>\n";
    }
}
closedir($dh);
if(strlen($uploaded_files) == 0)
{
    $uploaded_files = "<li><em>No files found</em></li>";
}
function getFileType($extension)
{
    $images = array('jpg', 'gif', 'png', 'bmp');
    $docs   = array('txt', 'rtf', 'doc');
    $apps   = array('zip', 'rar', 'exe');

    if(in_array($extension, $images)) return "Images";
    if(in_array($extension, $docs)) return "Documents";
    if(in_array($extension, $apps)) return "Applications";
    return "";
}
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>
    <style type="text/css" media="all">
         @import url("css/style.css");
    </style>
    </head>
    <body>
        <?php include 'modules/upload-main-nav.php'; ?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
        <div id="container">
        <h1>Online File Storage</h1>

        <!-- This field form uploads files to the server -->

        <div>
            <legend>Add a new file to the storage</legend>
            <form method="post" action="contact.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            <p><label for="name">Select file</label><br />
            <input type="file" name="file" /></p>
            <!-- <p><label for="password">Password for upload</label><br />
            <input type="password" name="password" /></p> -->
            <p><input type="submit" name="submit" value="Start upload" /></p>
            </form>
        </div>
    </div>

<br/>
<br/>
<br/>
<br/>
<br/>

           <center><a class="btn btn--primary type--uppercase inner-link" href="previously-uploaded.php">
                <span class="btn__text">
                    UPLOADED FILES
                </span>
            </a></center>
<br/>
<br/>
<br/>
<br/>
<br/>


        <?php include 'modules/footer.php'; ?>

        <?php include 'modules/footer-script.php'; ?>
        <script src="js/filestorage.js" />
    </body>
    </html>