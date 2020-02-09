<?php

	class Car { 

		var $wheel = 10; // var means variable
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

	$bus = new Car();

	echo $bmw->wheel . "<br>";
	echo $bus->wheel = 8;

	$bmw->greeting() . "<br>"; 
	// $bmw->wheel = 12;
	echo $bmw->wheel; // Do not need of any $ sign.

?>



<!DOCTYPE html>
<html>
<head>
	<title>Defining Class</title>
</head>
<body>

</body>
</html>