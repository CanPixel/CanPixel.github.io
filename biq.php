<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BIQ</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; width:73%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<h1 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h1>
				<br><a id="backButton" href="eigenWerk.php"><-- Back</a><br>
			<br>
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>"Size Doesn't Matter"</b></h2> <br>
				<div id='foto2'></div> <hr>
				
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#info' style='display:inline-block;margin:10px;'>Info<br><span style='font-size:11px;float:right;margin-top:5px;'>Technical</span></a>
			<a class='download' id='anchor' href='#story' style='display:inline-block;margin:10px;'>Story<br><span style='font-size:11px;float:right;margin-top:5px;'>Lore</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game</span></a>
			<br><hr>
				
				<div style="font-size:19px;width:65%;margin:auto;">
<div class="boxMove" style="width:200px;float:left;background-color:#444; padding:10px;margin-bottom:15px;"><i>"It's nice!"</i> - <b>Fisken</b></div><br> <br>
<div class="boxMove" style="width:300px;float:right;background-color:#444; padding:10px;"><i>"This game is gr8"</i> - <b>Dr. Vivid</b></div><br> <br>
<div class="boxMove2" style="width:350px; background-color:#444; padding:10px;"><i>"This game is houseblowing"</i> - <b>Ca$h</b></div>
			</div><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
<b>BIQ</b> is a project/mechanics experiment I worked on in april of 2015. <br> 
<br> It is made in the <a href="https://www.scirra.com/construct2" class="link" target="_blank">Construct 2</a> engine. This is a 2D Game engine based on events sheets and variables. It is easy to use, and versatile. In my opinion it also gives the user more possibilities than other likewise engines such as GameMaker.<br> I used an old version of the engine, <i>making the game buggy on some new versions of Google Chrome.</i><br><br>
<i style='font-size:18px;'>A sidescroller platformer for one player (but planned for up to four)</i>. For now only singleplayer works.<br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br> The game is playable in browser, or as a standalone file for Mac, Windows or Linux. <br>Some elements may be negatively affected on some browser versions. <br> <br>
BIQ is made in the 2D HTML5-based engine Construct 2. <br>All concepts, mechanics and stylistic choices are tailored by me. <br> The sounds and textures are made by people I've met through online gaming communities.<br>
There may be some edgy or pseudo-adult themes featured within the dialogue of this game (in a humoristic way), however this does not influence the core gameplay which is kid-friendly. <br> <b>For most ages</b> <br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="story" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Story</b> <br> <br> <br>
<i style="background-color:#888;">Kormandy is a small and especially cozy town,<br>where ironically the biggest university of the country is placed. The town is known for its very close-tied and engaging population.</i> <br> <br>
In the game you play as one of many biLEDs (bipedal LED Robot), crafted by Professor Bryce, lead engineer of Kormandy.<br> He extensively studied Engineering back in the day. This was at the <b>University of Nationally Universal Machines Empowering Trading and Learning</b>, along with his best friend Angus. They would be the two best Engineering students of the university.<br> After two years they diverged, choosing different specialisations. Because of this they lost contact.<br> <br>

Fast forward to the year 2134, where modern technology and traditional culture (postmodernism equilibrium) are finally perfectly in balance, according to the inhabitants. All historical landmarks, and antique elements have been intact for years. And thus, the town is known for being a heaven for tourists. <i>But a great danger is lurking over the town...</i> <br>

One night, Professor Bryce notices a giant silhouette emerging from the distant horizon that is nearing the town. It's a <b>GiGanTiC KiLLEr RoBoT!1!1!</b> Swiftly he feels the need to protect his hometown, using his only strength; Which is his PhD in engineering. He crafts a small bipedal acrobatic robot, whom he calls the biLED. He deploys these robots as a protective force for saving the town. Now it's up to you to dismantle the giant robot, before the town is obliterated! <br>You run as fast as you can to the giant robot, and you notice a word written on the main frame: "C H A O T R O N  V1". As you near the robot, you also hear some sort of human voice; The robot has a speaker?! <br> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br> Use 'A' & 'D' to move, 'W' or spacebar to jump. <br> When in mid-air you can do a dolphin dive-maneuvre by jumping in a specific direction and holding the respective directional arrow key (← & →). <br>With this you can grab onto ledges and climb onto hard to reach surfaces. <br>(Except the Chaotron leg, which is meant to be ran on at the right time, using it as a ramp to jump on to the giant robot. <br> </p>
<br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="ideeen" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Ideas</b> <br> <br>
- Radiation<br>
- Intelligent cannon<br>
- Achievements<br>
- Civilians<br>
- The Tutoritron<br>
- Player Crouch<br>
- Chaotron crush<br>
- TV monitor for cutscenes<br>
- Cutscenes <br>
- Spawn point: Dependant of chaotron progress<br>
- Fix bugs enzo
- Randomly generated chaotrons<br>
- Jetpacks<br>
- Grass<br>
- More sounds (item pushing sound, chaotron mouth opening sound)<br>
- Loading screen<br>
- Phone port<br>
- Destruction Insurance (and money system)<br>
- And more...
<br>
<br>
		Story Details:<br>
- Destruction Insurance Company of Kormandy (D.I.C.K) is the insurance company of Kormandy, which uses taxes on all of your earnings, to rebuild the city.<br>
- After every loss of a Chaotron, Angus learns from his mistakes and builds a more complex and
stronger Chaotron with more and/or different more effective traps. This fact also would make
sense with the game's difficulty curve.<br>
- Maybe every 5 levels (each level being a face off with a Chaotron) Angus would design a
specially themed Chaotron, where he would invest more money in to his creation to also add
decorative pieces. (So every 5 levels you have a menacing looking "boss stage".<br>
- Bryce's BiLEDs basicly are small little humanoid robots that are very agile and are programmed
to be able to climb the Chaotrons and destroy them. BiLED is a name consisting of wordplays of
Biped and LED light, because they are bipedal and have a LED light on their chest indicating health.<br>
- BiLEDs could consist of different materials as in-game upgrades. Perhaps with stronger health,
health regen or other perks.<br>
<br>
		Game Modes:<br>
- Time based, where a Chaotron is traversing through/towards a city and you have to disable
the Chaotron before the city gets destroyed.<br>
- Score based, where you score points by doing certain stuff to the robot where
both parties can upgrade with points and the person who could buy the last upgrade wins the game.<br>
- Small Objectives (achievement race), where either party gets small objectives like reaching certain points on the robot.
The one with the most objectives when the time runs out, wins the game.<br>
- Capture the flag, 2 biLED teams have to capture flag(s) that are positioned on a neutral chaotron in the middle
of the map.<br>
- Race between 2 biLED teams, with random (de)buffs after certain amount of time.<br>
<br>
				</p> <br> <hr> <br>
				
				<div id='fotos'></div>
				
				<script>
				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 85%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;}.LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 94%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIOverlaytext h4 {font-size:16px;}\
				</style>";
				
				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/biq1.jpg' width='350'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Chaotron Traps & Agile Jumping</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/biq2.jpg' width='350'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Tile Physics & Destructible World</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/biqScreen.jpg' width='350' height='190'/></div>";
					
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/biqHang.jpg' width='350' height='190'/></div><br><br>";
				</script>
				
				<hr>
				
				<br> 
				<span id="play" class="anchorOffs"></span>
				<div style="border: solid 6px #555; background-color:#515151;color:#CCC;"><br>
				<div style="height:400px;">
					<iframe style="border:none;" src="biq/index.html" width="100%" height="100%"></iframe> </div><br>
				
				<section style="background-color:#666; height:100%;"> <br>
				<b><i style="font-size:18px;">Controls:</i></b> <br>
				
				<table id="controls" style="font-size:14px; width:250px; border:none; margin:auto; margin-top:10px; margin-bottom: 10px; background-color:#515151;">
					<tr>
						<th style="text-align:right;">Movement:</th> <th><i>A (left), D (right)</i> </th>
					</tr>
					<tr>
						<th style="text-align:right;">Jump:</th> <th><i>W / Space</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Dive (Mid air):</th>
						<th><i>← & →</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Interact/Place Bomb:</th>
						<th><i>E</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Detonate Bombs:</th>
						<th><i>P</i></th>
					</tr>
				</table>
				<br />
				
					<i style="font-size:18px;" class="log"><b>Changelog</b></i>

				<div class="panel"> <pre>
				
				
				<b>V006</b> 

The last update of the game was in april of 2015.

- Fixed some bugs with the bomb
- You don't get damaged anymore from bombs, 
after you beat the chaotron
- The screen now shakes when the 
chaotron explodes
- Improved various sprites
- Rigging bombs is a tad bit easier
- Added a main menu
- Added level-specific lighting
				
									</pre>
				</div> <br>
				
				<br> <hr> <br>
				
				<b>There might be browser-dependant problems/bugs. <br> - New versions of Chrome freeze the game at the start. <br><br>If this happens, the stand-alone download might be a better option.</b> <br> <br>
				</section>
				
				</div>

				<span id="download" class="anchorOffs"></span>
				<a target="_blank" href="https://drive.google.com/file/d/0B6xqmiCSNEGkUEFqNkFmVjBpbWM/view"><div class="download" style="width:40%; height:80px; margin:auto;"><h2 style="font-size:28px;">Download BIQ</h2></div></a>
				
				<script>
					var acc = document.getElementsByClassName("log");
					var i;

					for (i = 0; i < acc.length; i++) {
						acc[i].onclick = function(){
							/* Toggle between adding and removing the "active" class,
							to highlight the button that controls the panel */
							this.classList.toggle("active");

							/* Toggle between hiding and showing the active panel */
							var panel = this.nextElementSibling;
							if (panel.style.display === "block") {
								panel.style.display = "none";
							} else {
								panel.style.display = "block";
							}
						}
					}
				</script>
				
				<style>
					.boxMove {
						transition-delay: 0.4s;
						transition: transform 0.4s ease, margin-top 0.4s ease, margin-bottom 0.4s ease;
						transform: rotate(0deg) scale(1);
						margin-top: 5px;
						margin-bottom: 10px;
					}
					
					.boxMove:hover {
						transform: rotate(6deg) scale(1.2);
						margin-top: 15px;
						margin-bottom: 25px;
					}
					.boxMove2 {
						transition-delay: 0.4s;
						transition: transform 0.4s ease, margin-top 0.4s ease;
						transform: rotate(0deg) scale(1);
						margin:auto;
						margin-top:40px;
						clear:both;
					}
					
					.boxMove2:hover {
						transform: rotate(-4deg) scale(1.2);
						margin-top:55px;
					}
					
					#controls th
					{
						border-right: solid 2px #8B8B8B;
						border-bottom: solid 2px #8B8B8B;
						padding: 2px;
					}
					
					i.log {
						cursor: pointer;
						padding: 18px;
						width: 100%;
						text-align: left;
						border: none;
						outline: none;
						transition: 0.4s;
					}
					
					i.log.active, i.log:hover {
						color: #444;
						background-color: #ddd;
						border-radius:2px;
					}
					
					div.panel {
						margin:auto;
						margin-top:19px;
						padding: 0px 10px;
						width: 500px;
						background-color: #515151;
						display: none;
						text-align:left;
						border-right: solid 2px #8B8B8B;
						border-bottom: solid 2px #8B8B8B;
					}
					
					#download {
						border-radius:2px; padding:15px; background-color:#EEEEEE;
					}
					
					#download:hover {
						background-color:#FFF;
						cursor:pointer;
					}
				</style>
				
				<br>
				</div><br></div><br></div>
				
								<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
