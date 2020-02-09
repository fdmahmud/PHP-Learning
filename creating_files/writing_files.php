<?php 
	
	$file = "example.txt";

	if($handle = fopen($file, 'w')) {

		fwrite($handle, 'I love php And fuck you.');


		fclose($handle);
	} else {
		echo "The file could not be written";
	}

	

	
?>