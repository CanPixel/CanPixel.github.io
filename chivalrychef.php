<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chivalry Chef</title>
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
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px; font-size:36px;'><b>"Because pineapple ruins every dish!"</b></h2> <br>
				<!--<div id='foto2'></div> <hr>-->
				
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#design' style='display:inline-block;margin:10px;'>Design<br><span style='font-size:11px;float:right;margin-top:5px;'>Design Documents, Resources</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game!</span></a>
			<br><hr>
				
				<div style="font-size:19px;width:65%;margin:auto;">
<div class="boxMove" style="width:350px;float:left;background-color:#444; padding:10px;margin-bottom:15px;"><i>"Medieval Marinade!"</i></div><br> <br>
<div class="boxMove" style="width:200px;float:right;background-color:#444; padding:10px;"><i>Garnish Garde!</i></div><br> <br>
<div class="boxMove2" style="width:220px; background-color:#444; padding:10px;"><i>Itsa king's recipe!</i></div>
			</div><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>



<i style='font-size:18px;'>A delicious battle royale, taking place in a fully edible arena! <br> Switching PvP / PvE action!</i><br> </p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br>
Chivalry Chef is <i>going to be</i> made in <a href='https://www.unrealengine.com/en-US/blog' target='_blank' class='link'>Unreal Engine 4</a>. <br>
  <br>The concept, all the mechanics, sounds, music, art/visuals and design choices were made by me. <br>
<br>
	<b>For All Ages.</b> <br> </p> <br>

<div style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br> 

<table id="control" style="clear:both; width:300px;">
					<tr>
						<th>Key</th> 
						<th>Action</th>
  					</tr>

					<tr> 
						<td> ↑ → ↓ ← </td> 
						<td> Move around </td> 
					</tr>

				</table>
<br> </div>
<br> <hr>

<div style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="design" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Design</b> <br> <br> 

<p style='font-size:26px; margin-bottom:5px; margin-left:5px; margin-top:5px;'>20-11-2018</p>
<div id='foto3'></div>

<br> </div>
				
				<!--<div id='fotos'></div>-->
				
				<script>
				var design = document.getElementById("foto3");
				var html3 = "";

				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 55%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{cursor:zoom-out; opacity:1;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); border:solid 6px #444;} .LIobject:hover{cursor:zoom-in; height: 20%; border:solid 6px #555;}.LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 94%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIOverlaytext h4 {font-size:16px;}\
				</style>";

				html3 = html + "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/ChevalierChef.jpg' width='760'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>First One Page Design Document</h4></div></div></div>";
				design.innerHTML += html3;				

				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/SCN (1).jpg' width='320'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>BLACK HOLES & HIGHSCORES</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/SCN (2).jpg' width='320'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Collectibles</h4></div></div></div> <br> <br>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/SCN (3).jpg' width='320'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Orbit</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				
				document.getElementById("foto2").innerHTML += "<div><img class='LIimage' src='images/SCNBanner.jpg' height='210'/></div>";
				</script>
				
				<hr>
				
				<br> 
				<span id="play" class="anchorOffs"></span>
				<div style="border: solid 6px #555; background-color:#515151;color:#CCC;"><br>
				<div style="height:650px;">
					</div><br>
				
				<section style="background-color:#666; height:100%;"> <br>
				<b><i style="font-size:18px;">Controls:</i></b> <br>
				
				<table id="controls" style="font-size:14px; width:250px; border:none; margin:auto; margin-top:10px; margin-bottom: 10px; background-color:#515151;">
					<tr>
						<th style="text-align:right;">Movement:</th> <th>↑ → ↓ ←</th>
					</tr>
					<tr>
						<th style="text-align:right;">Interact:</th> <th>X</th>
					</tr>
				</table>
				<br />
<hr> <br>				
					<i style="font-size:18px;" class="log"><b>Changelog</b></i>

				<div class="panel"> <pre>
				
				
				<b>V0.0.1</b> 


				
									</pre>
				</div> <br>
				
				<br> <br>
				
				</section>
				
				</div>
				
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
				
				<br><br>
				</div><br></div><br></div>
				
				<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br><hr>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
