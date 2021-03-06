<?php

require 'dbh.inc.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($username) || empty($email) || empty($password)){
	
	header("Location: signup.php?error=emptyfields");

	exit();

}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {

	header("Location: signup.php?error=invalidemailusername");

	exit();

}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

	header("Location: signup.php?error=invalidemail");

	exit();

}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {

	header("Location: signup.php?error=invalidusername");

	exit();

}
else {

	$sql = "SELECT UsernameUsers FROM users WHERE UsernameUsers=?";
	
	$statement = mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($statement, $sql)){

		header("Location: signup.php?error=sqlerror");

		exit();
	
	} else {
	
		mysqli_stmt_bind_param($statement, "s", $username);
		
		mysqli_stmt_execute($statement);
		
		mysqli_stmt_store_result($statement);
		
		$resultCheck = mysqli_stmt_num_rows($statement);
		
		if ($resultCheck > 0) {
			
			header("Location: signup.php?error=usertaken");

			exit();
		} else {
		
			$sql = "INSERT INTO users (UsernameUsers, UserEmail, UserPasswords) VALUES (?, ?, ?)";
			
			$statement = mysqli_stmt_init($conn);
			
			if (!mysqli_stmt_prepare($statement, $sql)){

				header("Location: signup.php?error=sqlerror");

				exit();
	
			} else {
				
				$hashPassword = password_hash($password, PASSWORD_DEFAULT);
				
				mysqli_stmt_bind_param($statement, "sss", $username, $email, $hashPassword);
		
				mysqli_stmt_execute($statement);
				
				header("Location: index.php?signup=success");

				exit();
				
			}
		}
	}
}

mysqli_stmt_close($statement);

mysqli_close($conn);



