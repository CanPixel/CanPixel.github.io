<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>t e n f o l d</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
    
    <script type="text/javascript">
		function addVideoSnippet(link, start, end, desc)
		{
			var fontSize = 22;
			if(desc.length > 20) fontSize = 15;
			
			var startNums = start.split(":");
			var startMin = parseInt(startNums[0])*60 + parseInt(startNums[1]);
			var endNums = end.split(":");
			var endMin = parseInt(endNums[0])*60 + parseInt(endNums[1]);
			var html = "<div style='margin-left:8px; margin-top:-10px; text-align:center; display:inline-block;'><div style='width:370px; height:250px; background-color:#777; border:solid 8px #777; padding-top:4px; margin:auto;'><iframe class='snippetVid' style='width:95%; height:85%;' src='https://www.youtube.com/embed/"+link+"?version=3&start="+startMin+"&end="+endMin+"&controls=0' frameborder='0' gesture='media' allowfullscreen></iframe><h4 style='font-size:"+fontSize+"px; width:355px; height:30px; margin-top:5px; margin-left:-11px; background-color:#666; border:solid 8px #666; padding:10px;'>"+desc+"</h4></div></div>";
			document.write(html);
		}
</script>
    
	<div style="float:left; width:73%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<h1 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h1>
				<br><a id="backButton" href="tenfold.php"><-- Back</a><br>
			<br>
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>Inspirations</b></h2> <br>
				<div id='foto2'></div>
			</div><br><hr>
			
<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Serial Killer Stories<br><span style='font-size:11px;float:right;margin-top:5px;'>Gruesome aspects</span></a>
<a class='download' id='anchor' href='#culture' style='display:inline-block;margin:10px;'>Culture<br><span style='font-size:11px;float:right;margin-top:5px;'>Horror in Culture</span></a>
<a class='download' id='anchor' href='#literature' style='display:inline-block;margin:10px;'>Literature<br><span style='font-size:11px;float:right;margin-top:5px;'>Books</span></a>
<a class='download' id='anchor' href='#games' style='display:inline-block;margin:10px;'>Games<br><span style='font-size:11px;float:right;margin-top:5px;'>Inspirations in Gaming</span></a>
<a class='download' id='anchor' href='#art' style='display:inline-block;margin:10px;'>Art<br><span style='font-size:11px;float:right;margin-top:5px;'>Inspirations in Art</span></a>
<br><hr><br>

<iframe width="560" height="315" src="https://www.youtube.com/embed/wEJMsezPgH8?version=3&start=148&end=171" frameborder="0" gesture="media" allowfullscreen></iframe>
<br> <br>

- Schizo trip (Own experience) <br> <br>
						
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Serial Killer Stories</b> <br> <br>
 
- Ed Gein<br>
- Zodiac Killer<br>
- Andrei Chikatilo<br>
- Ted Bundy<br>
- Richard Ramirez Nightstalker<br>
- Anatoly Onopriyenko<br>
</p>
<br>
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="culture" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Horror in Culture</b> <br> <br>
	<b>TURK / ARAB:</b> <br>
	- <a class="link" target="_blank" href="https://tr.wikipedia.org/wiki/Cin">Cinler</a>, Kleine duivel van vuur, Achterstevoren voeten, van vuur gemaakt.<br>
	- <a target="_blank" class="link" href="https://en.wikipedia.org/wiki/Shahmaran">Shahmaran</a> <br>
	
	https://korkubilimi.com/antik/turklerin-islamdan-once-ki-gok-tanri-inanci-hak-dinmiydi.html
	https://korkubilimi.com/antik/incilde-gecen-10-korkunc-canavar.html
	https://korkubilimi.com/mitoloji/turk-mitolojisindeki-en-onemli-10-tanri-ve-tanrica.html
	
	- Krampus 
	https://en.wikipedia.org/wiki/Krampus
	
	JAPANESE:
	- TSUKUMOGAMI - Objects come to life
	- MOKUMOKUREN - Wall coming to life when too many holes punched in

</p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="literature" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Literature</b> <br> <br>
https://en.wikipedia.org/wiki/Pseudomonarchia_Daemonum
</p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="art" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Art</b> <br> <br>
- Junji Ito <br>
- Keiichiro Toyama<br>
- Abstract Horror<br>
- Beksinski<br>
- Francis Bacon<br>
- Salvador Dali<br>
- Cubism horror<br>
</p> <br>

<section style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; padding-top:1px; color:#222; font-size:17px;">
<p>
<span id="games" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Games</b> <br> <br>
<div style="text-align:center; width:97%; padding:10px; font-size:28px; background-color:#777;"><b>Silent Hill 1:</b></div>
 <br>
 <script>
	 addVideoSnippet("WI5FCJF-Fas", "7:25", "9:06", "Cinematic Camera Angles & Tank Controls");
	 addVideoSnippet("1KH0mDgZGow", "31:18", "32:00", "Dreadful & Tough Combat");
 </script>
 <br> <br> <br>
 
- The game changes stuff when you look away (like dissapearing dead bodies) | Viewport messing<br>
<br>
<div style="text-align:center; width:97%; padding:10px; font-size:28px; background-color:#777;"><b>F.E.A.R 3:</b><br></div><br>
- Paranormal / Invisible entities<br>
- Haunting<br>
- Assault Rifles (?)<br>
- Possessing other people's minds, controlling<br> them<br>
<br>
<div style="text-align:center; width:97%; padding:10px; font-size:28px; background-color:#777;"><b>Silent Hill: Shattered Memories:</b><br></div><br>
- Psychological profiling <br>
- Replaying the game while knowing the end changes the story's logic and adds +1 replay value<br>
- Fear of anticipation, Fear of fear, Fear for a jumpscare that doesn't come<br>
<br>
<div style="text-align:center; width:97%; padding:10px; font-size:28px; background-color:#777;"><b>Silent Hill 2:</b><br></div><br>
- Symbolism plot, projection of character's own worst fears and emotions<br>
<br>
<div style="text-align:center; width:97%; padding:10px; font-size:28px; background-color:#777;"><b>Silent Hill 4: The Room:</b><br></div><br>
- Getting attached to a safe space, and it becomes as unsafe as the rest eventually<br>
- Claustrophobia: being stuck in a confined space, but being able to look at the outside world<br>
- 1st & 3rd person perspectives<br>
- Seeing stuff change in your "safe" area<br>
<br>
<b>Siren 1 & 2:</b><br>
- Multiple Chars<br>
- Character Blindness<br>
- The multiple characters, that leave traces behind of already being there before a different char even goes there.<br>
- Progressive game timeline progression<br>
- looking through the eyes of the monsters hunting you<br>
- Uncanny valley 2D faces on top of 3D models creepiness<br>
<br>
<b>Dead Rising:</b><br>
- Examine/Use everything at your disposal<br>
- Open world / sandbox<br>
- Comedy / Lightheartedness<br>
<br>
<b>Fatal Frame / Dead Rising / Silent Hill:ShattMem:</b><br>
- Photography<br>
- Technology as a tool<br>
<br>
<b>Amnesia:</b><br>
- Hiding mechanic<br>
- Monsters following you/hunting you down<br>
<br>
<b>Saw:</b><br>
- Traps and Gore, Torture<br>
<br>
<b>SCP - Containment Breach:</b><br>
- Monsters, Object-Human morphing<br>
<br>
<b>Outlast:</b><br>
- Camera<br>
<br>
<b>Amnesia:</b><br>
- Hiding<br>
- Chase Sequences<br>
- Paranoia<br>
<br>
<b>Left 4 Dead:</b><br>
- The Director<br>
<br>
<b>LSD Dream Emulator:</b><br>
- Randomness<br>
<br>
<b>Ghost Hunting series:</b><br>
- EVP's<br>
</p>
</section>


CANNIBALISM<br>

ABANDONMENT<br>

Empty plane mid-air

UZUMAKI - Junji Ito | Abstract shape takes over town

Nature:
- Sand Geyser
- Blue Lava
- Sky Trumpet Sound Weird
- Weird "Artificial" formations in landscape (Ex. Junji Ito, Enigma of ...)
<br> <br>

				
				<div id='fotos'></div>

				<br>
				</div> </div><br>
				
				<script>
				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(90%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 85%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{ cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{height: 20%; border:solid 6px #555;}.LIobject:hover .LIoverlay{height: 15%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 94%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIOverlaytext h4 {font-size:20px;}\
				</style>";
				
				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/tenfold1.jpg' width='440' height='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Day lighting</h4></div></div></div>\
				<br> <br> ";
				
				style.innerHTML += html;
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/t e n f o l d.jpg' width='400' height='240'/></div>";
				</script>
				
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
				
				<a href='#top'><div class='download' style='width:380px; margin:auto;'>&uarr; Breng me terug naar boven! &uarr;</div></div></a></div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>