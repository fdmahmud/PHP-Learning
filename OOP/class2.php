<?php

	class Car { // !!!!!!! IT HAS TO BE CAPITALIZED.
		function greeting() {
			echo "Hello students";
		}
	}



	if (method_exists("Car", "greeting")) { //checking if the Methode exixts. ("Class Name", "Method Name")
		echo "Nice";
	} else {
		echo "No";
	} 

?>



<!DOCTYPE html>
<html>
<head>
	<title>Defining Class</title>
</head>
<body>

</body>
</html>