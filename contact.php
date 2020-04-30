<?php
	session_start();
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> Contact Us | Epic Gaming Tutorials </title>
      <link rel="stylesheet" type="text/css" href="index.css"/>
      <link rel="icon" href="images/icon.png"/>
      <script async src="script.js"></script>
  </head>

  <body>
  
	<?php

			if(isset($_SESSION["id"])){

				$username = $_SESSION["Username"];

				echo  "<div class='login'>$username <p>Logged In</p></div>" ;

			}
			else {

				echo "<div class='login'><p> Not Logged In </p></div>";

			}
	?>
  
    <h1 id="header"> <b> Contact Us </b> </h1>
    <p id="headerDesc"> Have questions? Found a game-breaking bug? Let us know! </p>

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
          <span onClick="signinLink()"> Sign-in/up </span>
        </div>

      </div>
    </div>

  </body>

</html>
