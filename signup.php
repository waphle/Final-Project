<?php
	require "signin.html";
?>


	<main>
		<h1> Signup</h1>
		<form action="signup.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username">
			<input type="text" name="mail" placeholder="E-mail">
			<input type="password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat Password">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>
