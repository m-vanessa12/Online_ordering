<?php 
include './admins/login.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="gradient_overlay">
	<div class="header">

	    <h1>Vanessa Cafe</h1>
		<ul>
			<li><a href="user_login.php" class="menu">menu</a></li>
			<li><a href="user_login.php">onder now</a></li>
			<li><a href="user_login.php">Admin</a></li>
		</ul>

	</div>

	<div class="form">
    <h1>ADMIN</h1>
	<form action="" method="POST">
	<input type="text" name="names" placeholder="Enter Your Username" required=""><br>
    <input type="password" name="passwordd" placeholder="Enter Your Password" required=""><br>
	<input type="submit" name="submit" value="LOGIN">
    
    <p>Sign-up if don't you have accound <a href="admin_signup.php">Sign-up</a></p>
 </form>

 </div>
</div>

</body>
</html>

