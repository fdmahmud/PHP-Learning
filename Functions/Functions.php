 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		
 		function say_Something() {
 			echo "Hello World";
 		}

 		say_Something();
 		echo "<br>";
 		function anotherFunction() {

 			say_Something();
 		}
 		anotherFunction();


 	?>
 	
 </html>