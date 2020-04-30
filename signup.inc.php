<?php

if (isset($_POST['signup-submit'])){
	
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

	header("Location: signup.php?error=invalidusername&email=".$email);

	require 'dbh.inc.php';
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordcopy = $_POST['password-repeat'];
	
	if (empty($username) || empty($email) || empty($password) || empty($passwordcopy)){
		
		header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);


		exit();
	
	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	
		header("Location: signup.php?error=invalidemailusername");

		exit();
	
	}
	else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	
		header("Location: signup.php?error=invalidemail&username=".$username);

		exit();
	
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	
		header("Location: signup.php?error=invalidusername&email=".$email);

		exit();
	
	}
	else if ($password !== $passwordcopy) {
	
		header("Location: signup.php?error=password&username=".$username."email=".$email);

		exit();
	
	} else {
	
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
				
				header("Location: signup.php?error=usertaken&email=".$email);

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
					
					header("Location: signup.php?signup=success");

					exit();
					
				}
			}
		}
	}
	
	mysqli_stmt_close($statement);
	
	mysqli_close($conn);
	
}

else {

	header("Location: signup.php");

	exit();

}
