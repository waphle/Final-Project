<?php

$error = $_GET['error'];
$signup = $_GET['signup'];

if ($error=="emptyfields"){

	echo "<script type='text/javascript'>alert('Empty Fields');</script>";

}
else if ($error=="invalidemailusername"){

	echo "<script type='text/javascript'>alert('Invalid Username and Email');</script>";

}
else if ($error=="invalidemail"){

	echo "<script type='text/javascript'>alert('Invalid Email');</script>";

}
else if ($error=="invalidusername"){

	echo "<script type='text/javascript'>alert('Invalid Username');</script>";

}
else if ($error=="sqlerror"){

	echo "<script type='text/javascript'>alert('SQL Error');</script>";

}
else if ($error=="usertaken"){

	echo "<script type='text/javascript'>alert('Username Taken');</script>";

}
else if ($signup=="success"){

	echo "<script type='text/javascript'>alert('Account Made');</script>";

}
?>
<!DOCTYPE html>

<html lang = "en">

	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
		<title> User Sign-up | Epic Gaming Tutorials </title>
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link rel="icon" href="images/icon.png"/>
		<script async src="script.js"></script>
	</head>

	<body>
		<h1 id="header"> Sign-up< /h1>
		<p id="headerDesc"> Sign-up here boi. </p>

    <div class="flexContainer">
      <div id="infoBox">
        <div class="row" id="home">
          <span onClick="homeLink()"> Home </span>
        </div>

        <div class="row" id="tutorials">
          <span onClick="tutorialLink()"> Tutorials </span>
        </div>

        <div class="row" id="testimonials">
          <span onClick="testimonialsLink()"> Testimonials </span>
        </div>

				<div class="row" id="signin">
          <span onClick="signinLink()"> Members </span>
        </div>

      </div>
    </div>

		<div class="signupAbout">
			<span>
				&nbsp;&nbsp;&nbsp;&nbsp;Want exclusive perks as a member? Want to show off how
				badass of a gamer you are? Then join us today! It's absolutely free too! Members get to
				receive monthly spam emails about donations for the owners' failing CS:GO crate
				gambling business, new tutorials up to one week earlier than non-members, and
				even bi-monthly raffles!
			</span>
		</div>

		<div class="signupForm">
			<form action="signup.inc.php" method="post">
				<input type="text" name="username" placeholder="Username">
				<input type="text" name="email" placeholder="E-mail">
				<input type="password" name="password" placeholder="Password">
				<button id = "signupButton" type="submit" name="signup">Sign up!</button>
			</form>
			<a id = "backButton" href="signin.php"> Back </a>
		</div>
	</body>
</html>
