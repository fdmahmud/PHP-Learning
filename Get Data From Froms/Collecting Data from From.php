 <?php 
 		
 		if (isset($_POST['submit'])) {
 			
 			//echo "It's Alive!!!!";
 			$names = ["ferdous","mahmud","Tasin","abidMahmud","Maria","Monirul","Masud"];

 			$userName = $_POST['userName']; // Associative Arrays
 			$passWord = $_POST['passWord']; // Associative Arrays

 			if (strlen($userName) < 5) {
 				echo "need things Bigger";
 			}

 			elseif (strlen($userName) > 10) {
 				echo "Too big!! Too big!";
 			}

 			else {
 				echo "Hello " . $userName . "<br>" . "Your password is: ". $passWord;
 			}
 			
 			if (!in_array($userName, $names)) {
 				echo "<br>" . "Fu*k off";
 			}
 			else {
 				echo "<br>" . "Welcome";
 			}
 		}

 		

 	?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pain in the ass</title>
 </head>
 <body>
 	

 	<form action="" method="post">
 		<input type="text" name="userName" placeholder="Username"><br>
 		<input type="password" name="passWord" placeholder="Passowrd"><br>
 		<input type="submit" name="submit">
 	</form>
 	
 </html>