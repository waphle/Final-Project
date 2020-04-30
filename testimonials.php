<?php
	session_start();
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> Tips & Tricks | Epic Gaming Tutorials </title>
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

    <h1 id="header"> <b> Testimonials </b> </h1>
    <p id="headerDesc"> Testimonials from users like you! </p>

    <div class="flexContainer">
      <div id="infoBox">
        <div class="row" id="home">
          <span onClick="homeLink()"> Home </span>
        </div>

        <div class="row" id="tutorials">
          <span onClick="tutorialLink()"> Tutorials </span>
        </div>

        <div class="row" id="signin">
          <span onClick="signinLink()"> Sign-in/up </span>
        </div>

        <div class="row" id="contact">
          <span onClick="contactLink()"> Contact </span>
        </div>

      </div>
    </div>

    <div class="testimonials">
      <p>
        <img id="tyler" src="images/Tyler1.png" alt="tyler"/>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, tota deserunt voluptatibus
					nam no. Ad mei oportere complectitur, est semper regione ea, cu his labore
					 tacimates maiestatis. No vide mollis sea, ne has elit eligendi explicari.
					 Est phaedrum quaerendum ei, solet vulputate ex ius, qui blandit perfecto
					 consetetur et. Et modo stet facete mei, suas affert legere ne usu. Has eu
					 sint instructior. Labore aliquip sed ea. Id mollis euismod invenire sit,
					 semper aperiam ad usu. Duo unum impedit legendos ad, vel impetus molestiae
					 in. Eos consetetur disputando ut, in nibh mazim conceptam qui.
        </span>
      </p>

			<p>
        <img id="jerma" src="images/Jerma.png" alt="jerma"/>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, tota deserunt voluptatibus
					nam no. Ad mei oportere complectitur, est semper regione ea, cu his labore
					 tacimates maiestatis. No vide mollis sea, ne has elit eligendi explicari.
					 Est phaedrum quaerendum ei, solet vulputate ex ius, qui blandit perfecto
					 consetetur et. Et modo stet facete mei, suas affert legere ne usu. Has eu
					 sint instructior. Labore aliquip sed ea. Id mollis euismod invenire sit,
					 semper aperiam ad usu. Duo unum impedit legendos ad, vel impetus molestiae
					 in. Eos consetetur disputando ut, in nibh mazim conceptam qui.
        </span>
      </p>
    </div>

  </body>

</html>
