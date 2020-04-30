<!DOCTYPE html>

<html lang = "en">

	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
		<title> User Sign-in/up | Epic Gaming Tutorials </title>
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link rel="icon" href="images/icon.png"/>
		<script async src="script.js"></script>
	</head>
	<main>
		<h1 id="header"> Signup</h1>
		<form action="signup.inc.php" method="post">
			<input type="text" name="username" placeholder="Username">
			<input type="text" name="email" placeholder="E-mail">
			<input type="password" name="password" placeholder="Password">
			<input type="password" name="password-repeat" placeholder="Repeat Password">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>
</html>