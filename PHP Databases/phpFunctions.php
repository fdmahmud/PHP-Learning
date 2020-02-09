<?php include "db.php";?>
<?php
 	function createRows() {
 		global $connection;
		if (isset($_POST['submit'])) {
 			$username = $_POST['username'];
			$password = $_POST['password'];

			$username = mysqli_real_escape_string($connection, $username); //SQL security // Sanatize data. Cleanes Data.
			$password = mysqli_real_escape_string($connection, $password);  //SQL security // Sanatize data. Cleanes Data.


			$hashFormat = "$2y$10$"; 
			$salt = "iusesomecrasystrings22";
			$hash_and_salt = $hashFormat . $salt;
			$password = crypt($password, $hash_and_salt);

			$query = "INSERT INTO users(username,password)"; // concatenet Query.
			$query .="VALUES ('$username','$password')";

			$result = mysqli_query($connection, $query); //MySQL query

			if (!$result) {
				die("Fucked" . mysql_error());
			}
			else {
				echo "Data submitted." . '<br>' . 'Welcome ' . $username;
			}

			if ($username && $password) { // Checking if username and password is empty
 				echo "Username " . $username . "<br>" . "Password " . $password;
 			}
 			else {
 				echo "no";
 			}

 		}
 	}

 	function readData() {
 		global $connection;
 		$query = "SELECT * FROM users";

			$result = mysqli_query($connection, $query); //MySQL query

			if (!$result) {

				die("Fucked" . mysql_error());
			}

			while ($row = mysqli_fetch_assoc($result)) { // mysqli_fetch_row() fetches all data	
 				print_r($row);
 			}
 	}

 	function showAllData() {
 		global $connection;
 		$query = "SELECT * FROM users";
			$result = mysqli_query($connection, $query); //MySQL query/ Pulling information from database
			if (!$result) {
				die("Fucked" . mysql_error());
			}


		while($row = mysqli_fetch_assoc($result)) {

		 							$id = $row['id'];

		 							echo "<option value='$id'>$id</option>";

		 						}
		 					}

	function Update() {
			if (isset($_POST['submit'])) {
			global $connection;
			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];

			$query = "UPDATE users SET ";
			$query .= "username = '$username', ";
			$query .= "password = '$password' ";
			$query .= "WHERE id = $id";

			$result = mysqli_query($connection, $query);

			if (!$result) {
				die("not working" . mysqli_error($connection));
			}
		}
	}


	function Delete() {
			if (isset($_POST['delete'])) {
			global $connection;
			$id = $_POST['id'];

			$query = "DELETE FROM users ";
			$query .= "WHERE id = $id ";

			$result = mysqli_query($connection, $query);

			if (!$result) {
				die("not working" . mysqli_error($connection));
			}
		}	
	}
?>