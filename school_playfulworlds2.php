<?php
	include "styleswitch.inc";
	$page = "playfulworlds2";
	$main_page = "eigenwerk";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Life Sentence</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; max-width:73.8%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				
				<h2 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Building Playful Worlds 2</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr><div id="overzicht" style="width:80%; margin:auto;"></div><hr>
				<div id="opdrachten"></div>
				
				<script>
					var datums = ["29-6-2018", "29-6-2018", "29-6-2018", "29-6-2018", "29-6-2018"];
					var files = ["Gallery", "Footage", "Log", "lifesentence/Design Document.pdf", "Build"];
					var titles = ["Development Gallery", "Footage Log", "DevLog", "Game Documentation", "Build"];
					var descs = ["Development Pictures of Life Sentence (Unity Game)", "Previews of weekly progress", "", "Overview, summary, documentation, controls", ""];
					
					var currentBuild = "lifesentence/LifeSentence.zip";
					var currentVid = "l_GGGzv7f7k";
					var kernelSweepGalleryAmount = 5;
					
					var currentVersion = 1.0;
					
					var html = "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 75%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);}</style>";
					
					for(i = files.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						if(file[1] == null) file[1] = 720;
						if(file[2] == null) file[2] = 700;
						
						html += "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p>" + descs[i] + "</p>";
						
						if(titles[i] == "Build")
						{
							html += "<span class='titleCard'>Showcase:</span><br>";
							html += "<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='1080' height='480' src='https://www.youtube.com/embed/"+currentVid+"' frameborder='0' allowfullscreen></iframe><br><br><br>";
							
							html += "<h3>Life Sentence v"+currentVersion+"</h3><a style='margin-bottom:10px;' download href='"+currentBuild+"'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br>";
						}
						
						if(file[0] == "Gallery")
						{	
							var objecten = ["Leaning Left/Right (Hold E)", "Foregrounds", "Guard w/ flashlight", "Shadows", "Prison Corridor"];
							
							for(j = 1; j <= kernelSweepGalleryAmount; j++)
							{	
								html += "<div style='min-width:24%' class='LIobject' onclick='openIMG(this)'>";
								html += "<img class='LIimage' width='"+file[1]/2+"' height='"+file[2]/4+"' src='lifesentence/lifesentence ("+j+").jpg' />";

								html += "<div class='LIoverlay'><div class='LIOverlaytext'><h4>"+objecten[j-1]+"</h4></div></div>";

								html += "</div>";
							}
							html += "<p style='clear:both;'></p><br>";
						}
						else if(file[0] == "Footage")
						{
							var links = ["N15Xp0UdTbk", "LYIcL_0mdzU", "135YuMwmBuk", "0bFUDDI3xU4"];
							
							for(j = 0; j < links.length; j++)
							{	
								html += "<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='480' height='220' src='https://www.youtube.com/embed/"+links[j]+"' frameborder='0' allowfullscreen></iframe>";

								html += "</div>";
							}
							html += "<p style='clear:both;'></p><br>";
						}
						else if(file[0] == "Log")
						{
							html += "<object style='clear:both;' data='lifesentence/Life Sentence.pdf' width='700' height='720'></object><br><br>";
						}
						else if(file[0].endsWith(".pdf"))
						{
							html += "<object style='clear:both;' data='"+file[0]+"' width='700' height='720'></object><br><br>";
						}
						
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
					}
				style.innerHTML += html;
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc";?>
</body>
</html>
