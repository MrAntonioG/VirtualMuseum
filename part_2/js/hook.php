<?php
	//path to thumbnail images
	$directory = '../assets/images/gallery';
	//load files with following extensions
	$allowed_extensions = array('jpg','jpeg','gif','png');
	//array to seperate extension from each file
	$file_parts = array();
	//response message
	$response = "";
	//open directory for parsing
	$dir_handle = @opendir($directory);
	//iterate through all the files
	while ($file = readdir($dir_handle)){
		//check for hidden files
		if(substr($file,0,1) != '.') {
			//Split each file name for the extensions
			$file_components = explode('.',$file);
			//grap extension
			$extension = strtolower(array_pop($file_components));
			//if extension is valid add to the response
			if (in_array($extension, $allowed_extensions)){
				//build a response string
				$response .= $directory.'/'.$file.'~';
			}
		}
	}
	
	closedir($dir_handle);
	//return the response
	echo substr_replace($response,"",-1);
?>