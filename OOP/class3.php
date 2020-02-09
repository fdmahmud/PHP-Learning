<?php

	class Car { // !!!!!!! IT HAS TO BE CAPITALIZED.
		function greeting() {
			echo "Hello students";
		}
		function br() {
			echo "<br>";
		}
	}



	$bmw = new Car(); //Putting objects in a variable
	$benz = new Car();

	$bmw->greeting(); // THIS IS How to use object.
	$bmw->br();
	$benz -> greeting(); // THIS IS How to use object.
?>



<!DOCTYPE html>
<html>
<head>
	<title>Defining Class</title>
</head>
<body>

</body>
</html>