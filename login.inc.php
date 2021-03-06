<?php

require 'dbh.inc.php';

$emailUsername = $_POST["emailUsername"];
$password = $_POST["password"];

if (empty(emailUsername) || empty(password)){

	header("Location: signin.php?error=emptyfields");

	exit();

}
else {

	$sql = "SELECT * FROM users WHERE UsernameUsers=? OR UserEmail=?;";

	$statement = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($statement, $sql)){

		header("Location: signin.php?error=sqlerror");

		exit();

	}else {

		mysqli_stmt_bind_param($statement, "ss", $emailUsername, $emailUsername);
		
		mysqli_stmt_execute($statement);

		$result = mysqli_stmt_get_result($statement);
		
		if ($row = mysqli_fetch_assoc($result)){
		
			$checkPassword = password_verify($password, $row['UserPasswords']);
			
			if($checkPassword == false){
			
				header("Location: signin.php?error=wrongpassword");

				exit();
			
			}
			else if($checkPassword == true){
			
				session_start();
				
				$_SESSION['id'] = $row['UserIds'];
				
				$_SESSION['Username'] = $row['UsernameUsers'];
				
				header("Location: signin.php?login=success");

				exit();
			
			}else{
			
				eader("Location: signin.php?error=wrongpassword");

				exit();
			
			}
		}else{
		
			header("Location: signin.php?error=nouser");

			exit();
		
		}

	}
}
