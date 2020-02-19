$message = "";
	//Has the user uploaded something?
	if(isset($_FILES['file']))
	{
		$target_path = Settings::$uploadFolder;
		$target_path = $target_path . time() . '_' . basename( $_FILES['file']['name']);

	//Check the password to verify legal upload

	if($_POST['password'] != Settings::$password)
	{
	    $message = "Invalid Password!";
	}
	else
	{

		 //Try to move the uploaded file into the designated folder
	        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
	            $message = "The file ".  basename( $_FILES['file']['name']). 
	            " has been uploaded";
	        } else{
	            $message = "There was an error uploading the file, please try again!";
	        }
	    }
	}

		if(strlen($message) > 0)
	{
	    $message = '<p class="error">' . $message . '</p>';
	}

	/** LIST UPLOADED FILES **/
	$uploaded_files = "";
 
	//Open directory for reading
	$dh = opendir(Settings::$uploadFolder);

	//LOOP through the files
	while (($file = readdir($dh)) !== false) 
	{

	if($file != '.' && $file != '..')
	$filename = Settings::$uploadFolder . $file;
	$parts = explode("_", $file);{
	$size = formatBytes(filesize($filename));
	$added = date("m/d/Y", $parts[0]);
	$origName = $parts[1];

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
