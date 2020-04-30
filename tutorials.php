<?php
	session_start();
?>
<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
      <title> Tutorials | Epic Gaming Tutorials </title>
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

    <h1 id="header"> <b> Tutorials </b> </h1>
    <p id="headerDesc"> Here you will find tutorials for games, old and new! </p>

    <div class="flexContainer">
      <div id="infoBox">
        <div class="row" id="home">
          <span onClick="homeLink()"> Home </span>
        </div>

        <div class="row" id="testimonials">
          <span onClick="testimonialsLink()"> Testimonials </span>
        </div>

        <div class="row" id="signin">
          <span onClick="signinLink()"> Sign-in/up </span>
        </div>

        <div class="row" id="contact">
          <span onClick="contactLink()"> Contact </span>
        </div>

      </div>
    </div>

    <div class="tutorials">
      <p id="PONG">
        <a href="https://www.ponggame.org/">
          <img id="Pong" src="images/Pong.png" alt="Pong"/>
        </a>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Pong is a table tennis sports game featuring simple
          two-dimensional graphics, manufactured by Atari and originally released in
          1972. It was one of the earliest arcade video games and created by Allan
          Alcorn as a training exercise assigned to him by Atari co-founder Nolan Bushnell.
          Bushnell and Atari co-founder Ted Dabney were surprised by the quality of
          Alcorn's work and decided to manufacture the game.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Pong is a two-dimensional sports game that simulates
          table tennis. The player controls an in-game paddle by moving it vertically
          across the left or right side of the screen. They can compete against another
          player controlling a second paddle on the opposing side. Players use the
          paddles to hit a ball back and forth. The goal is for each player to reach
          eleven points before the opponent; points are earned when one fails to return
          the ball to the other.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Pong is part of the permanent collection of the Smithsonian
          Institution in Washington, D.C., due to its cultural impact.
        </span>
      </p>

      <p id="DoomEternal">
        <a href="https://store.steampowered.com/app/782330/DOOM_Eternal/">
          <img id="DoomEternalImage" src="images/DoomEternal.png" alt="DoomEternalImage"/>
        </a>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Doom Eternal is a first person shooter video game
          developed by id Software and published by Bethesda Softworks. It is the
          fifth main game in the Doom series and a direct sequel to 2016's Doom, and
          was released on March 20, 2020, for Windows, PlayStation 4, Stadia and Xbox
          One, with a Nintendo Switch version planned for a release at a later date.
          The game received positive reviews, with praise for its campaign, graphics,
          level design, soundtrack and combat mechanics, while some disliked the game's
          increased focus on storytelling.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;DOOM Eternal has a notorious enemy known as <a href = "https://doom.fandom.com/wiki/Marauder"> the Marauder</a>.
          Many players have faced frustration dealing with this mini-boss, but don't
          worry! We got you covered. The key is to keep moving. Dodge its attacks and
          projectiles, and utilize your Super Shotgun. Some players,
          <a href = "https://www.youtube.com/watch?v=-OBERZpoCxA"> like YouTuber Oyff</a>, have
          taken advantage of this, showing how one can easily defeat the Marauder.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;It may take a few attempts to be
          able to take down this enemy. Best of luck!
        </span>
      </p>

      <p id="Witcher">
        <a href="https://store.steampowered.com/app/292030/The_Witcher_3_Wild_Hunt/">
          <img id="WitcherImage" src="images/Witcher.png" alt="WitcherImage"/>
        </a>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;The Witcher 3: Wild Huntis a 2015 action role-playing
           game developed and published by a Polish developer CD Projekt and is based
           on The Witcher series of fantasy novels by Andrzej Sapkowski.Players control protagonist
           Geralt of Rivia, a monster slayer (known as a Witcher) who is looking
           for his missing adopted daughter on the run from the Wild Hunt, an other
           worldly force determined to capture her and use her powers.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Players battle the game's many dangers with weapons
          and magic, interact with non-player characters, and complete main-story
          and side quests to acquire experience points and gold, which are used to
          increase Geralt's abilities and purchase equipment. Its central story has
          several endings, determined by the player's choices at certain points in the game.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;The game received critical acclaim, with praise for
          its gameplay, narrative, world design, combat, and visuals, although it received
          minor criticism due to technical issues.
        </span>
      </p>
			
			<p id="tf2">
        <a href="https://store.steampowered.com/app/440/Team_Fortress_2/">
          <img id="tf2Image" src="images/TeamFortress2.png" alt="tf2Image"/>
        </a>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Team Fortress 2 is a multiplayer first-person shooter
					game developed and published by Valve. It is the sequel to the 1996 mod Team
					Fortress for Quake and its 1999 remake, Team Fortress Classic. The player
					can join one of two teams, RED or BLU, and choose one of 9 character classes
					to battle in game modes such as capture the flag and king of the hill.
					Team Fortress 2 received critical acclaim for its art direction, gameplay,
					humor, and use of character in a multiplayer-only game.
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;Team Fortress 2 is known for its high learning-curve
					and near endless number of playstyles for each of the nine classes. From rocket
					and sticky jumping as the Soldier and Demoman, respectively, to strafing around
					as the Scout, one must spend hours perfecting their skills. The game heavily
					rewards you when you land a hit, and punishes you for missing. It's very
					"hit or miss."
        </span>
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;The game is also known for its community-made mods
					and content, as shown in its
					<a href = "https://steamcommunity.com/app/440/workshop/">Steam Workshop page</a>.
        </span>
      </p>
    </div>

  </body>

</html>
