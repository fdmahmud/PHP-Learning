 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		
 		$a = 6;
 		$b = 3;
 		$c = 4;
 		$d = 1;
 			//While Loop    --------------------
 		while ($a > $b) {
 			echo "Hello". "<br>";
 			//$b= $b+50;
 			$b++;
 		}

 			//Do while Loop  --------------------
 		do {
 			echo "World" . "<br>";
 			echo $a;
 			$a++;
 		} while ( $a <= 10);

 			echo "<br>";

 			// For Loop      --------------------

 		for ($counter = 0; $counter < 5; $counter++) {

 			echo $counter . "<br>";
 		}

 			//For each loop  --------------------
 			//Works for array

 			$forV = [12,134,32,45,'Sawon'];

 			foreach ($forV as $forN) {
 				echo $forN . "<br>";

 			}
 	?>
 	
 </html>