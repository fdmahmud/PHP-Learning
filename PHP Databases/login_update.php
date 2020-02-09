<?php include "db.php";?>
<?php include "phpFunctions.php";?>
<?php Update();?>
<?php Delete();?>
<?php include 'includes/header.php';?>

 <body>


 	<div class="container">
 		<form action="" method="POST">
 				<div class="from-group">
 					<label for="username">Username</label>
 					<input type="text" name="username" class="from-control">
 				</div>
 				<div class="from-group">
 					<label for="password">Password</label>
 					<input type="password" name="password" class="from-control">
 				</div>
 				<div class="from-group">
 					<select name="id" id="">

 						<?php showAllData(); ?>
 						<!-- <option value="">id</option> -->
 					</select>
 				</div> 
 				<input type="submit" name="submit" value="Update" class="btn btn-primary">
 				<input type="submit" name="delete" value="Delete" class="btn btn-primary">
 			</form>
 		<div class="col-sm-6">
 			
 		</div>
 	</div>

 	
 </html>