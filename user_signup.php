<?php
include './users/add_user.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Sign-up</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="gradient_overlay">
	<div class="header">

	    <h1>Vanessa Cafe</h1>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn"><i class=" fa fa-bars"></i></label>
		<ul>
			<li><a href="user_login.php">onder now</a></li>
			<li><a href="admin_signup.php">Admin</a></li>
		</ul>

	</div>
	<div class="form">
		<h1>USERS</h1>
		<form action="" method="POST">
			<input type="text" name="names" placeholder="Enter Your Username" required=""><br>
			<input type="text" name="email" placeholder="Enter Your Email" required=""><br>
			<input type="password" name="passwordd" placeholder="Enter Your Password" required=""><br>
			<input type="submit" name="submit" value="SIGN-UP" class="button">
			
			<p>Login if you have accound <a href="user_login.php">Login</a></p>
		</form>

    </div>
</div>
 

</body>
</html>


