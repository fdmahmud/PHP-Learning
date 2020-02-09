 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		
 		function addNumbers($num1, $num2) {
 			$sum = $num1 + $num2;

 			return $sum;
 		}

 		$result = addNumbers(3,4);
 		echo $result . "<br>";
 		$result = addNumbers(100,$result);
 		echo $result;

 	?>
 	
 </html>