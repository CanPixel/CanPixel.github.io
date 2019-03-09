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
	
	<div style="float:left; width:73%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<h1 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h1>
				<br><a id="backButton" href="eigenWerk.php"><-- Back</a><br>
			<br>
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>Procedural Psychological Horror</b></h2> <br>
				<div id='foto2'></div>
			</div><br><hr>
			
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#info' style='display:inline-block;margin:10px;'>Info<br><span style='font-size:11px;float:right;margin-top:5px;'>Technical</span></a>
			<a class='download' id='anchor' href='#story' style='display:inline-block;margin:10px;'>Story<br><span style='font-size:11px;float:right;margin-top:5px;'>Lore</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game</span></a>
			<a class='download' id='anchor' href='#archives' style='display:inline-block;margin:10px;'>Archives<br><span style='font-size:11px;float:right;margin-top:5px;'>Dev log, inspirations</span></a>
			<br><hr><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
<b>Project [t e n f o l d]</b> is a new kind of Horror experience that is in progress. It is meant to encapsulate stories of darkness, fear, the human psych, and the funamental essence of "creepy". This project will feature elements of my own story and experiences, my own environment, the people around me, but also go off into twisted fantasies. <br> As content gets added, updates will be posted on here.<br> <br>

<br> This project is made within its own 3D engine, in Java <br> using <a href="https://www.lwjgl.org/" class="link">LightWeight Java Game Library</a> and <a class="link" href="https://www.opengl.org/">OpenGL</a> as its framework.<br> <br>

A <i style='font-size:18px;'>procedurally generated personalized horror experience</i>, meant to individually boggle the mind of its user, and give everyone a completely different journey through the depths of the inner mind. <br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br> <b>[t e n f o l d]</b> runs as a standalone file. <br>
 It runs on its own engine, written in Java. <br>All concepts, music and sound design, mechanics and stylistic/design choices are made solely by me. Models and textures will not only be made by me, but may also be collaborated on with people around me. That only adds to the concept.
<br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="story" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Story</b> <br> <br> <br>
	<i>[Insert story here]</i></p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br> <i>[Insert controls here]</i> <br> </p>
<br> <hr> <br>
				
				<div id='fotos'></div>
				
				<hr>
				<span id="archives" class="anchorOffs"></span>
				<div style="width:80%; margin:auto;">
				<a href=""><h2 class="download">Dev-Log</h2></a>
				<a href="tenfold_inspirations.php"><h2 class="download">Inspirations</h2></a>
				<a href=""><h2 class="download">Mechanics</h2></a>
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
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/tenfold2.jpg' width='440' height='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Night lighting</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				document.getElementById("foto2").innerHTML += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/t e n f o l d.jpg' width='400' height='240'/></div>";
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
					
				</div><br>
				
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
				<br />
				
					<i style="font-size:18px;" class="log"><b>Changelog</b></i>

				<div class="panel"> <pre>
				
				
				<b>v0.1</b> 

W.I.P
				
									</pre>
				</div> <br>
				
				<br> <hr> <br>
				
				<div style="width:80%; margin:auto;"><b>...<br></b></div> <br>
				</section>
				
				</div>
				<span id="download" class="anchorOffs"></span>
				<div class="download" style="width:40%; height:80px; margin:auto;"><h2 style="font-size:28px;">Download coming soon...</h2></div>
				
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
				</div><br>
				
				<a href='#top'><div class='download' style='width:380px; margin:auto;'>&uarr; Breng me terug naar boven! &uarr;</div></a></div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
