<?php 
	
	$file = "example.txt";

	if($handle = fopen($file, 'r')) {

		echo $content = fread($handle, 10); // each byte equals a character !!! filesize($file) !!!


		fclose($handle);
	} else {
		echo "The file could not be written";
	}

	

	
?>