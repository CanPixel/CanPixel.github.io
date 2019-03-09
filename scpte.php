<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SCP - The Escape</title>
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
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>First Java Game</b></h2> <br>
				<div id='foto2'></div>
				
				<br>
			</div><hr>
			
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#info' style='display:inline-block;margin:10px;'>Info<br><span style='font-size:11px;float:right;margin-top:5px;'>Technical</span></a>
			<a class='download' id='anchor' href='#story' style='display:inline-block;margin:10px;'>Story<br><span style='font-size:11px;float:right;margin-top:5px;'>Lore</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game</span></a>
			<br><hr><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
<b>SCP - The Escape</b> was the first project I've made, in april of 2015. <br> 
<br> This game is coded from scratch in Java. One of the first self-coded projects, making the game pretty buggy. (Of course) It was one huge learning process for me as a developer. I came across a variety of technical concepts and challenges, and these have helped me progress further.
SCP - The Escape is a <i style='font-size:18px;'>sidescroller action/horror platformer for one player</i>. <br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br> The game is only available as a standalone .jar for Windows. <br>Also, the game is pretty much unplayable due to its bugs and lack of optimisation, causing frequent crashes. <br> <br>
SCP - The Escape is coded in a custom 2D tile-engine, written in Java. I have reused some assets / textures on later projects such as <a href="pixelthrive.php" class="link">PixelThrive</a>. <br>All concepts, mechanics and stylistic choices are made by me. <br> The textures are made by a collection of texture-artist friends I've met through gaming.<br> The music and sounds were grabbed from online sources (Now I prefer making them myself). <br>
The game is meant for fans of horror, even though the game itself might not be excruciatingly terrifying. <br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="story" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Story</b> <br> <br> 
SCP - The Escape is based on the community fiction of the <a href="http://www.scp-wiki.net/scp-series" class="link">SCP-Wiki</a>. <br> <br>

The game features three different gamemodes based on elements of the wiki, of which are: <br><br><i>- Class-D <br>- SCP-058 <br>- MTF (Rounds-based Horde mode)</i> <br> <br>

In <b><i>Class-D</i>-mode</b> you play as a "test-subject" that got stuck in the SCP facility. All dangerous SCPs have scaped their containments. The staff is getting mauled one by one by these creatures, and it is up to you to escape the facility unharmed. <br> <br>

In <b><i>SCP-058</i>-mode</b> you play as: <br> <br> <object style="width:97%; height:600px; margin:auto;" data="http://www.scp-wiki.net/scp-058"></object> <br> <br>
This gamemode is more Stealth-oriented. This time, <i>you</i> are the monster wanting to escape. Armed guards will be in your way trying to stop you from getting out. The player gets the option to distract, kill or avoid them. <br> <br>

In <b><i>MTF (Horde)</i>-mode</b> you play as said armed security guard. As a contrast to the previous gamemodes, this one is more arcadelike and has rounds-based gameplay. Each round you encounter a random SCP  that is featured in the game. Based on your luck you might get a safe, neutral or hostile SCP entity. You have unlimited bullets, so shoot away and try to get as far as possible! After each round, you receive points which you can spend on a plethra of upgrades within the Gun Shop.
</p><br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br> Use 'A' & 'D' to move, spacabar to jump, and left shirt to run (dependant on stamina). <br>By holding 'E' you can manage your inventory.<br> By pressing 'F' you blink. This is a crucial game mechanic in the Class-D mode. <br> For all controls, see the ingame menu.<br> </p>
<br> <hr> <br>
			
				<span class='titleCard'>Playthrough by Yamimash:</span><br>
				<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='840' height='480' src='https://www.youtube.com/embed/ByFHdeeTK5k' frameborder='0' allowfullscreen></iframe> <br> <br>
				
				<div id='fotos'></div>
				
				<script>
				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 70%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} .LIoverlay{height: 20%; border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 15%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);}</style>";
					
				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/scpte3.jpg' width='350' height='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>MTF (horde) mode</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/scpte2.jpg' width='350' height='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>SCP-058 mode</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/scpte1.jpg' width='350' height='240'/></div>";
				</script>
				
				<hr>
				
				<br> 
				<div style="border: solid 6px #555; background-color:#515151;color:#CCC;">
				<div style="height:400px;">
					<!--<iframe style="border:none;" src="biq/index.html" width="100%" height="100%"></iframe>
					<object
						archive="SCPTE.jar" codetype="application/java"
						classid="java:Component.class" 
						width="100%" height="100%">
					</object> !-->
					<span id="play" class="anchorOffs"></span>
					<applet width="100%" height="100%" code="org.lwjgl.util.applet.AppletLoader" 
        archive="lwjgl_util_applet.jar" 
        codebase="." >Download the game to play.
          <param name="al_title" value="SCP - The Escape"> 
  <param name="al_main" value="org.newdawn.slick.AppletGameContainer"> 
  <param name="game" value="net.PhuckYuToo.TheEscape.Main">

  <param name="al_jars" value="SCPTE.jar, lwjgl.jar, slick.jar"> 

  <param name="al_windows" value="windows_natives.jar"> 
  <param name="al_linux" value="linux_natives.jar"> 
  <param name="al_mac" value="macosx_natives.jar"> 

  <param name="separate_jvm" value="true"> 
        </applet> 
				</div><br>
				
				<section style="background-color:#666; height:100%;"> <br>
				<b><i style="font-size:18px;">Controls:</i></b> <br>
				
				<table id="controls" style="font-size:14px; width:250px; border:none; margin:auto; margin-top:10px; margin-bottom: 10px; background-color:#515151;">
					<tr>
						<th style="text-align:right;">Movement:</th> <th><i>A (left), D (right)</i> </th>
					</tr>
					<tr>
						<th style="text-align:right;">Jump:</th> <th><i>Space</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Inventory (hold):</th> <th><i>E</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Blink:</th> <th><i>F</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Fixed camera:</th> <th><i>M</i></th>
					</tr>
					<tr>
						<th style="text-align:right;">Toggle Black/White & Slomo:</th> <th><i>G</i></th>
					</tr>
				</table>
				<br>
				
					<i style="font-size:18px;" class="log"><b>Changelog</b></i>

				<div class="panel"> <pre>
				
				
				<b>v0.3.1</b> 

The last update of the game was around april of 2015.

- Redone the Audio system of the game to make the 
 game more lightweight.
- Made the main menu theme play on startup instead of 
after the intro animation.
				
									</pre>
				</div> <br>
				
				<br> <hr> <br>
				
				<b>The game gets a buggy-score of 9/10!</b> <br> <br>
				</section>
				</div>
				
				<span id="download" class="anchorOffs"></span>
				<a href="https://gamejolt.com/games/scp-the-escape/12962"><div class="download" style="width:50%; height:80px; margin:auto;"><h2 style="font-size:28px;">Download SCP - The Escape</h2></div></a>
				
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
				
				<br> <br>
				</div><br></div>
				
								<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
