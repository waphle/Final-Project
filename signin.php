<?php
	session_start();
?>
<?php

$error = $_GET['error'];
$login = $_GET['login'];

if ($error=="emptyfields"){

	echo "<script type='text/javascript'>alert('Empty Fields');</script>";

}
else if ($error=="wrongpassword"){

	echo "<script type='text/javascript'>alert('Wrong Password');</script>";

}
else if ($error=="nouser"){

	echo "<script type='text/javascript'>alert('Invalid Username');</script>";

}
else if ($error=="sqlerror"){

	echo "<script type='text/javascript'>alert('SQL Error');</script>";

}
else if ($login=="success"){

	echo "<script type='text/javascript'>alert('Logged In');</script>";

}
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> Members | Epic Gaming Tutorials </title>
      <link rel="stylesheet" type="text/css" href="index.css"/>
      <link rel="icon" href="images/icon.png"/>
      <script async src="script.js"></script>
  </head>
  <body>

	<?php

			if(isset($_SESSION["id"])){

				$username = $_SESSION["Username"];

				echo  "<div class='login'>$username <p>Logged In</p></div>";

			}
			else {

				echo "<div class='login'><p> Not Logged In </p></div>";

			}
	?>

    <h1 id="header"> <b> Members </b> </h1>
    <p id="headerDesc"> Sign-in here! </p>

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

      </div>
    </div>

		<div class="signinAbout">
			<span>
				&nbsp;&nbsp;&nbsp;&nbsp;Welcome back gamers! Oh, if you're new here, why not
				<a href="signup.php">join us?</a> :)
			</span>
		</div>

	<div class="signinForm">

		<?php
		if(isset($_SESSION['id'])){

			echo '<div class="logout"><form action="logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form></div>';

		}else {

			echo '<div class="login"><form action="login.inc.php" method="post"><input type="text" name="emailUsername" placeholder="Username/E-mail..."><input type="password" name="password" placeholder="Password"><button type="submit" name="login-submit">Login</button></form>';

		}
		?>

	</div>

  </body>

</html>
