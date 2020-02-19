	<div id="container">
		<h1>Online File Storage</h1>
	     
	    <!-- This field form uploads files to the server -->

	    <fieldset>
	        <legend>Add a new file to the storage</legend>
	        <form method="post" action="storage.php" enctype="multipart/form-data">
	        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	        <p><label for="name">Select file</label><br />
	        <input type="file" name="file" /></p>
	        <!-- <p><label for="password">Password for upload</label><br />
	        <input type="password" name="password" /></p> -->
	        <p><input type="submit" name="submit" value="Start upload" /></p>
	        </form>   
	    </fieldset>
	</div>



	<!-- Show's Previously Uploaded Files -->

	<fieldset>
    <legend>Previousely uploaded files</legend>
    <ul id="menu">
        <li><a href="">All files</a></li>
        <li><a href="">Documents</a></li>
        <li><a href="">Images</a></li>
        <li><a href="">Applications</a></li>
    </ul>
     
    <ul id="files">
    	<?php echo $uploaded_files; ?>
    </ul>
	</fieldset>