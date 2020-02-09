<?php 
	
	$file = "example.txt"; // This is how you create files.

	$handle = fopen($file, 'w'); // W means write.

	fclose($handle); // This is required otherwise the application will be slow.

?>