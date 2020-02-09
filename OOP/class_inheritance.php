<?php

	class Car { 

		var $wheel = 4; // var means variable
		var $engine = 1;
		var $doors = 2;

		function greeting() {
			echo "Hello students";

			$this->wheel = 11; // This $this keyword refers a class inside a class
		}
		function createDoors() {
			$this->doors = 4;
		}
		
	}

	$bmw = new Car(); // Assinging instense to a variable. So the whole thing is an instense.

	class Plane extends Car {
		
		var $wheel = 20;
	}

	$jet = new Plane();
	// /$jet->greeting();
	echo $jet->wheel;

?>



<!DOCTYPE html>
<html>
<head>
	<title>Defining Class</title>
</head>
<body>

</body>
</html>