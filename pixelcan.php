<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PixelCan</title>
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
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>My entry assignment</b></h2><br>
				
				<div id='foto2'></div><hr>
				
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#info' style='display:inline-block;margin:10px;'>Info<br><span style='font-size:11px;float:right;margin-top:5px;'>Technical</span></a>
			<a class='download' id='anchor' href='#story' style='display:inline-block;margin:10px;'>Story<br><span style='font-size:11px;float:right;margin-top:5px;'>Lore</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#makingof' style='display:inline-block;margin:10px;'>Making Of<br><span style='font-size:11px;float:right;margin-top:5px;'>Development Log</span></a><br>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game!</span></a>
			<br><hr><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
<b>PixelCan</b> is an <i style='font-size:18px;'>infinite scroller for one player</i>, with a variety of levels and a linear difficulty curve. <br>
<br>The game works by moving randomly generated level parts/platforms constantly to the left. By this you keep getting new platforms. <br>
</p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br>
The game is playable in your browser, or as a standalone file on Mac, Windows or Linux. <br>Depending on the browsers (such as Chrome) a couple of elements may not function correctly. Please keep this in mind. <br> <br> <br>
PixelCan is made in the 2D HTML5-based game engine <a href="https://www.scirra.com/construct2" class="link">Construct 2</a>. <br> All textures, sounds, music, concepts, mechanics and stylistic choices are made by me. <br> <br>
	<b>For all ages. </b> <br>
</p> <br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="story" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Story</b> <br> <br>
	PixelCan is about me, <a href="aboutMe.php" class="link">Can Ur</a>, the adventure of an ambitious Game Developer who is filled with endless ideas, but still wants to learn more about game design and development. <br> This is my adventurous story of getting admitted to the HKU, and studying Game Development. <br>
It's a huge battle against the ‘negativities’ of the study, of which I am trying to escape. (By constantly running to the right). <br>
By doing my best to survive and make progress, I will eventually reach my goal. And that's the motto of this game. (#realism) <br>
</p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>			
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br>
Controls are very simple, relying on the arrow keys or the W-A-S-D keys to move (← & →) and to jump. (↑ / Space) <br> <br>
I had wild ideas for this game. For example, to add small buildings and structures where you would have to traverse through, so the game would break free from the "<i>standard infinite side-scroller</i>"-idea. But due to time constraints, I have decided to keep it simple, and stupid. <br> 
</p> <br><hr><br>
				
				<div id='fotos'></div>
				
				<script>
				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 85%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;}.LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 94%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIOverlaytext h4 {font-size:20px;}\
				</style>";
				
				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/image1.jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Random Level Generation</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/image2.jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Cutscenes</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/PixelCanMenu.jpg' width='300'/></div><br><br>";
				</script>
				
				<hr>
				<h2 style="margin-bottom:10px; background-color:#999; padding:15px;">Dev-Log</h2><div style="background-color:#999; padding:15px; color:#222; font-size:17px;">
				<span id="makingof" class="anchorOffs"></span>
				<span class='titleCard'>The Making of:</span><br>
				<object data="https://drive.google.com/file/d/0B6xqmiCSNEGkSVFldzg3bnZxcVE/preview" width="720" height="480"></object> <br> </div> <br>
				
				<hr>
				
				<br> 
				<span id="play" class="anchorOffs"></span>
				<div style="border: solid 6px #555; background-color:#515151; color:#CCC;">
				<iframe style="border:none;" src="pixelcan/index.html" width="99.2%" height="500px"></iframe> <br />
				
				<section style="background-color:#666; height:100%;"> <br>
				<b><i style="font-size:18px;">Controls:</i></b> <br>
				
				<table id="controls" style="font-size:14px; width:250px; border:none; margin:auto; margin-top:10px; margin-bottom: 10px; background-color:#515151;">
					<tr>
						<th style="text-align:right;">Movement:</th> <th><i>A (left), D (right)</i> </th>
					</tr>
					<tr>
						<th style="text-align:right;">Jump:</th> <th><i>W / Space</i></th>
					</tr>
				</table>
				<br>
				
					<i style="font-size:18px;" class="log"><b>Changelog</b></i>

				<div class="panel"> <pre>
				
				
				<b>V003</b> 

- This game uses cookies to save your highscore, even 
after the game has been closed.
- The levels are a bit more balanced and 
diverse.

- <i>Different levels:</i>
<b>Untill 50 meters:</b> The "Wooden"-level, this is quite simple 
and acts as a beginning; The player can get used to the game.

<b>After 50 meters:</b> The so-called "Abstract"-level, where the
platforms are more spaced out. Some platforms have more complex
rotations, to fit the Mondriaan-esque theme of this part.

<b>After 150 meters:</b> The "Metal"-level, platforms are 
less frequent, and THEY ARE MOVING!
Now we're talking.

<b>After 400 meters:</b> The "Ice"-level. Platforms are even faster now!
This part has no mercy on the player.

Eventually after 800 meters, you get a mix of all levels in one. 
Good luck getting to 1km!
 
- Various bug fixes
- Sound and music added! (doesn't work in-browser)
				
									</pre>
				</div> <br>
				
				<br> <hr> <br>
				
				<b>There may be problems, depending on the browser you're using. <br> - New versions of Chrome freeze the game at start. <br><br>If this happens, try the download link for the stand-alone file below.</b> <br> <br>
				</section>
				
				</div>

				<span id="download" class="anchorOffs"></span>
				<a target="_blank" href="http://bit.ly/PixelCan"><div class="download" style="width:40%; height:80px; margin:auto;"><h2 style="font-size:28px;">Download PixelCan</h2></div></a>
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
				
				<br>
				</div><br></div><br></div>
								<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
