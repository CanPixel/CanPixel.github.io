<?php
	include "styleswitch.inc";
	$page = "kernmodule2";
	$main_page = "eigenwerk";
	$year = 2;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AnyWalker Tool</title>
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
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Core Module (Game Development)</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr><div id="overzicht" style="width:80%; margin:auto;"></div><hr>
				<div id="opdrachten"></div>
				
				<script>
					var datums = ["18-1-2019", "18-1-2019", "18-1-2019", "18-1-2019", "18-1-2019"];
					var files = ["Test", "UML", "Log", "Video", "Summary"];
					var titles = ["Usertest", "UML Diagram", "Documentation", "Video & GitHub", "Summary"];
					var descs = ["Feedback Form regarding user experience", "Code Architecture Diagram (UML)", "Overview, summary, technical info, documentation", "Showcase trailer of the project", "AnyWalker is a Tool for Unity Game Designers, that generates a level from ANY data or file type. <br> <br><b>What does that mean?</b> <br> Well, for example; You can turn any .mp3 file into a playable platformer level! <br> Or what about turning a .jpg file of Donald Trump into a Terrain mesh? <br> <br> This tool allows Designers to screw around, tinker with settings, implement new generation methods, or have some simple fun by creating and making anything walkable!"];
					
					var githubLink = "https://github.com/PhuckYuToo/KernModule/tree/master/Eindopdracht%20Tool/AV%20Level%20Converter";
					var currentVid = "kkf1a2N9620";
					
					var html = "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 45%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} \
.LIobject:hover{border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);}</style>";
					
					for(i = files.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						if(file[1] == null) file[1] = 720;
						if(file[2] == null) file[2] = 700;
						
						html += "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p " + ((descs[i].length > 50) ? "style='text-align:justify;width:70%;margin:auto;margin-bottom:20px;'" : "") + ">" + descs[i] + "</p>";
						
						if(files[i] == "Video")
						{
							html += "<br><span class='titleCard'>Tool Showcase:</span><br>";
							html += "<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='1080' height='580' src='https://www.youtube.com/embed/"+currentVid+"' frameborder='0' allowfullscreen></iframe><br><br><br>";
							
							html += "<a style='margin-bottom:10px;' href='"+githubLink+"' target='_blank'><div class='download' style='width:400px;height:25px;margin:auto;'>Github Link (Source Project)</div></a><br>";
						}
						else if(file[0] == "Log")
						{
							html += "<object style='clear:both;' data='pdf/Kernmodule_Tools.pdf' width='700' height='720'></object><br><br>";
						
							html += "<br><a style='margin-bottom:10px;' download href='pdf/Kernmodule_Tools.pdf'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br><br>";
						}
						else if(files[i] == "Test") {
							html += "<object style='clear:both;' data='https://goo.gl/forms/3h2f3TM2xHBZlVr72' width='700' height='720'></object><br><br>";
						
							html += "<a style='margin-bottom:10px;' href='https://goo.gl/forms/3h2f3TM2xHBZlVr72' target='_blank'><div class='download' style='width:400px;height:25px;margin:auto;'>See the full page (Link)</div></a><br>";
						}
						else if(files[i] == "UML") {
							html += "<a href='images/AnyWalker_UML.png' target='_blank'><img class='LIimage' src='images/AnyWalker_UML.png' width='720' height='920' /></div></a>";
						}
						else if(files[i] == "Summary") {
							html += "<div style='background-color:#aaaaaa;width:70%;margin:auto;height:100%;padding-top:5px;padding-bottom:5px;display:inline-block;'>";
							html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/AnyWalker (1).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Retro dungeons = Bullet Hell!</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/AnyWalker (2).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Enemies & Health</h4></div></div></div> <br>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/AnyWalker (3).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Craftable items</h4></div></div></div>\
<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/AnyWalker (4).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Craftable items</h4></div></div></div></div>";
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
