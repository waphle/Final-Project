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

				echo  "<div class='login'>$username <p>Logged In</p></div>" ;

			}
			else {

				echo "<div class='login'><p> Not Logged In </p></div>";

			}
	?>

    <h1 id="header"> <b> Testimonials </b> </h1>
    <p id="headerDesc"> Songs of praise from users like you! </p>

    <div class="flexContainer">
      <div id="infoBox">
        <div class="row" id="home">
          <span onClick="homeLink()"> Home </span>
        </div>

        <div class="row" id="tutorials">
          <span onClick="tutorialLink()"> Tutorials </span>
        </div>

        <div class="row" id="signin">
          <span onClick="signinLink()"> Members </span>
        </div>

      </div>
    </div>

    <div class="testimonials">

      <p id="1">
        <img id="tyler" src="images/Tyler1.png" alt="tyler"/>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;<b>Tyler1</b>: "Wow! This website is amazing! As a Twitch streamer,
					my job is to play games for the viewers' entertainment. Sometimes I get stumped
					on a certain level of a game, and I end up raging like a big baby (it's all an
					act though haha). With this website, I'm able to show off my pro-gamer moves
					and impress the 13 year olds. Many of us have made careers out of doing just
					these things: slogging through the grind, all day, the same quests over and
					over, hundreds of times to the point where we know evety little detail such
					that some have attained such gamer nirvana that they can literally play these
					games blindfolded.
        </span>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;I highly recommend this website. If you want to be
					a pro gamer like me, then use this website. I wholeheartedly endorse this,
					and the owners of this website deserve more love for their work."
        </span>
      </p>

		<p class="hidden" id="2">
        <img id="jerma" src="images/Jerma.png" alt="jerma"/>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;<b>Jerma985</b>: "You know, don't say swears. It's polite. Just like
					how polite the owners of this website are to me and other gamers seeking help.
					When I first found out about this website, I was just a smol compact Twitch
					streamer nobody. After learning about the tips on here, I now can't even
					compare how much better I am at playing games.
        </span>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;Because of this website, I am now in the Top 40 Streamers
					list on Twitch. Et modo stet facete mei, suas affert legere ne usu. Has eu
					sint instructior. Labore aliquip sed ea. Id mollis euismod invenire sit,
					semper aperiam ad usu. Id mollis euismod invenire sit,
					semper aperiam ad usu. Duo unum impedit legendos ad, vel impetus molestiae
					in. Eos consetetur disputando ut, in nibh mazim conceptam qui. Labore aliquip sed ea.
					Thank you guys, and as always, life is pain, I hate-"
        </span>
      </p>

		<p class="hidden" id="3">
        <img id="ninja" src="images/Ninja.png" alt="ninja"/>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;<b>Ninja (gamer)</b>: "The f**k you say to me you little s**t? ahahahahahahah
					how are you not in f*****g school? You kiss your mother with that mouth?
					It's called you kiss your mother with that f*****g mouth? Huh? Huh? ahhahahahaha,
					because the youth of ahahhdgsjgda you shut up when im talking to
					you, you shut your mouth.
        </span>
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;I said that to some kid who though he could be best
					me at roasting. The phrase "it's just a game" is such a weak mindset. You
					are ok with what happened, losing, imperfection of a craft. When you stop
					 getting angry after losing, you've lost twice. There's always something
					 important to learn, and always room for improvement, never settle. This website
					 thought me this mindset. It will do you good bro. Learn, and you will
					 able to do a lot for youself in this toxic gaming world..."
          </menu>
        </span>
      </p>

		<p class="hidden" id="4">
        <img id="overwatch" src="images/Overwatch.png" alt="overwatch"/>
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
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, tota deserunt voluptatibus
					nam no. Ad mei oportere complectitur, est semper regione ea, cu his labore
					 tacimates maiestatis. No vide mollis sea, ne has elit eligendi explicari.
        </span>
      </p>

		<p class="hidden" id="5">
        <img id="vsauce" src="images/VSauce.png" alt="vsauce"/>
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
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, tota deserunt voluptatibus
					nam no. Ad mei oportere complectitur, est semper regione ea, cu his labore
					 tacimates maiestatis. No vide mollis sea, ne has elit eligendi explicari.
        </span>
      </p>

		<p class="hidden" id="6">
        <img id="kleiner" src="images/kleiner.png" alt="kleiner"/>
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
				<span>
          &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, tota deserunt voluptatibus
					nam no. Ad mei oportere complectitur, est semper regione ea, cu his labore
					 tacimates maiestatis. No vide mollis sea, ne has elit eligendi explicari.
        </span>
      </p>
	  <button id = "nextButton"onClick="next()"> Next </button>
    </div>

  </body>

</html>
