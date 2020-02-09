<?php

	class Car { 

		public $wheel = 4; // available for everywhere. Same as var.
		protected $engine = 1; // only available to this class or any subclass such as extended class.
		private $doors = 2; // only available to this class. @@ DO NOT WORkS ON EXTENDED CLASS@@.

		function property() {
			echo $this->engine;
		}	
	}
	class Cars extends Car {
		function property1() {
			echo $this->doors;
		}
	}
	$bmw1 = new car();
	$bmw1->property();
	$bmw = new Cars(); // Assinging instense to a variable. So the whole thing is an instense.
	//$bmw->property1();

	

?>



<!DOCTYPE html>
<html>
<head>
	<title>Defining Class</title>
</head>
<body>

</body>
</html>