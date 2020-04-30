<?php
	session_start();
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> User Sign-in/up | Epic Gaming Tutorials </title>
      <link rel="stylesheet" type="text/css" href="index.css"/>
      <link rel="icon" href="images/icon.png"/>
      <script async src="script.js"></script>
  </head>
  <body>

	<?php

			if(isset($_SESSION["id"])){
				
				$username = $_SESSION["Username"]; 

				echo  "$username <p>Logged In</p>" ;

				echo "<p> Logged In</p>" ;

			}
			else {

				echo "<p> Not Logged In </p>";

			}
	?>

    <h1 id="header"> <b> Sign-in/up </b> </h1>
    <p id="headerDesc"> Join us today! </p>

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

        <div class="row" id="contact">
          <span onClick="contactLink()"> Contact </span>
        </div>

      </div>
    </div>
	<div class="signinForm">
	
		<?php 
		if(isset($_SESSION['id'])){
		
			echo '<div class="logout"><form action="logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form></div>';
		
		}else {
		
			echo '<div class="login"><form action="login.inc.php" method="post"><input type="text" name="emailUsername" placeholder="Username/E-mail..."><input type="password" name="password" placeholder="Password"><button type="submit" name="login-submit">Login</button></form>;<a href="signup.php">Signup</a></div>';
		
		}
		?>

	</div>

  </body>

</html>
