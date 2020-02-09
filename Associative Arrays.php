 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	<?php 
 		$assArray = array("name"=>'Ferodus Mahmud', "age"=>'24');

 		echo $assArray['name'];
 		echo "<br>";

 		$assArray2 = ["name"=>'Abid Mahmud', "age"=>'6'];

 		echo $assArray2['name']. " " .$assArray['name']; //Contatenent Concat

 	?>
 	
 </html>