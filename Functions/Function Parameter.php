 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		
 		//add(5,6);
 		function add($a,$b) {
 			$sum = $a+$b;
 			echo $sum . "<br>";
 		}

 		add(5,6);


 		function show_message($name) {
 			echo "Hello, MR." . $name . ".";
 		}

 		show_message("Ferdous Mahmud");
 		

 	?>
 	
 </html>