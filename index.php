<?php
	session_start();
?>
<?php
$login = $_GET['login'];
if ($login=="success"){

	echo "<script type='text/javascript'>alert('Account Made');</script>";

}
else if ($login=="logout"){

	echo "<script type='text/javascript'>alert('Logged Out');</script>";

}
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> Home | Epic Gaming Tutorials </title>
      <link rel="stylesheet" type="text/css" href="index.css"/>
      <link rel="icon" href="images/icon.png"/>
      <script async src="script.js"></script> <!-- async allows CSS animations to work -->
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

    <h1 id="header"> <b> Epic Gaming Tutorials </b> </h1>
    <p id="headerDesc"> "GG no re knob" </p>

    <div class="flexContainer">
      <div id="infoBox">
        <div class="row" id="tutorials">
          <span id="temp" onClick="tutorialLink()"> Tutorials </span>
        </div>

        <div class="row" id="testimonials">
          <span onClick="testimonialsLink()"> Testimonials </span>
        </div>

        <div class="row" id="signin">
          <span onClick="signinLink()"> Members </span>
        </div>

        <div class="row" id="easterEgg">
          <span><a href="https://www.youtube.com/watch?v=PZ98kg043oE"> What's this? </a></span>
        </div>

      </div>
    </div>

    <div class="aboutMe">
      <p>
        <img id="mainPageImg" src="https://i.imgur.com/6NYeSin.png" alt="mainPageImg"/>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Welcome gamers! Whether you're experienced in the
          world of gaming, or you've stumbled upon this website looking for a new
          hobby in the midst of COVID-19 lockdowns, welcome to EpicGamingTutorials.com!
          It's safer here.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Epic Gaming Tutorials was formed in 2020 by students
          Jeff Zhang and Nathan Riley. Bored in quarantine, they decided to spend
          their free time creating a hub for gamers, new and veteran, to inquire about
          games. From retros like PONG to AAA games like DOOM Eternal, this website
          has all the gaming help you need.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Please join us today! Users get exclusive
          content and get to see admin posts days before the public does!
        </span>
      </p>
    </div>

    <footer id="indexFooter">
      <span>
        Background image <a id="bckSrc" href="https://steamcommunity.com/market/listings/753/383870-Firewatch%3A%20Night%20Tower">source</a>
      </span>
    </footer>

    <div id="Validators"> <!-- Validators. The class "Style" makes the icons semi-transparent -->
      <a href="https://validator.w3.org/#validate_by_upload"> <p class="Style"> <img src="./images/w3c-html.png" alt="Valid HTML5" /></p></a>
      <a href="https://jigsaw.w3.org/css-validator/#validate_by_upload"> <p class="Style"> <img src="./images/w3c-css.png" alt="Valid CSS" /></p></a>
    </div>

  </body>

</html>
