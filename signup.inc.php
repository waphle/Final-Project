<?php

if (isset($_POST['signup-submit'])){
	
	require 'dbh.inc.php';
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordcopy = $_POST['password-repeat'];
	
	if (empty($username) || empty($email) || empty($password) || empty($passwordcopy)){
		
		header("Location: signup.php?error=emptyfields&username=".$username."&email=".$email);
	
}

?>