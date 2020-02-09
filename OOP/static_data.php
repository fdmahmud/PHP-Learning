<?php 

	class Car {

		static $wheels = 4; // static data can be used in class not as instence.
		var $door = 4;

		function MoveWheels() {

			Car::$wheels = 10; // Static syntax.

		}
	}

	$bmw = new Car();
	echo $bmw->door;

	Car::MoveWheels(); // Static syntax. 

	echo Car::$wheels; // This is STATIC property syntax.



	//echo $bmw->wheels; //This static data wont work

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>