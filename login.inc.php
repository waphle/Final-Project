<?php

if (isset($_POST['login-submit'])){
	
	require 'dbh.inc.php';
	
	$emailUsername = $_POST["emailUsername"];
	$password = $_POST["password"];
	
	
	
} else {
	
	header("Location: signin.html");

	exit();

}