<?php 
	$name = "SomeName";
	$value = 100;
	$expiration = time() + (60*60*24*365*2); // 2 years
	setcookie($name, $value, $expiration);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Making Cookies</title>
</head>
<body>
	<?php
		if (isset($_COOKIE["SomeName"])) {
			//$_COOKIE['']
			$someOne = $_COOKIE['SomeName'];
			echo $someOne;

		} else {
			$someOne = "";
		}

		
	 ?>
</body>
</html>