 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		// Local Scope and Global Scope

 	$a = "outside"; //Global variable

 	function convert() {

 		global $a; // THIS KEYWORD MAKES LOCAL VARIABLE GLOBAL.

 		$a = "inside"; //Local variable
 	}

	 	echo $a;
	 	convert();
	 	echo $a;

	 	echo $a;

 		





 		// function say_Something() {
 		// 	echo "Hello World";
 		// }

 		

 	?>
 	
 </html>