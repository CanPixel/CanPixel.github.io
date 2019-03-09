<?php
	include "styleswitch.inc";
	$page = "console";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DynaCon</title>
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

				<h2 id='title' style='margin-bottom: 0; font-size:36px;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Personal Study Project</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				
				<hr><div id="overzicht"></div><hr>
				<div id="opdrachten"></div>

				<script>
					var datums = ["6-6-2018", "6-6-2018"];
					var files = ["console/UrCan_ISA_1.pdf:600:860", "showcase"];
					var titles = ["Planning, Research & Log", "Project Showcase"];
					var descs = ["", "This is a second iteration on my <br> <a href='http://studenthome.hku.nl/~can.ur/school_ifthisthenthat.php' class='link'>PixelBoi (Arduino)</a> experiment. <br> <br><i>The DynaCon </i> (<b>Dyna</b>mic <b>Con</b>trols/<b>Con</b>sole) is a handheld game console project which is able to run my personal games, applications and general work-of-code. <br><br> It will be cartridge-based. <br>However, besides carrying the game within each cartridge they also contain the controls for each game, which allows for dynamic per-game based control layouts and types. <br> This also allows each game/application to be combined with a variety of experimental sensors, and odd game controller concepts.<br><br> I've been researching low-level programming (in C), working with various microcontrollers and embedded platforms, such as: <br> <br><i>- nVidia Jetson TK1<br>- STM32F769I-DISCOVERY<br>- Arduino R3 UNO & MEGA<br>- Raspberry Pi 3B+</i>"];
					
					for(i = datums.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,'').replace(':', ''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,'').replace(':', ''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p style='text-align:justify; align:justify; width:65%; margin:auto;'>" + descs[i] + "</p><br>";
							if(files[i].startsWith("showcase"))
							{
								html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);}</style>";
								
								var picSize = [200, 200];
								var picText = ["Analog Joystick Input Reading", "Displaying Text", "Multiple Joysticks + USB OTG", "Drawing Graphics", "Low Level Embedded C"];
								html += "<div style='background-color:#aaaaaa;width:70%;margin:auto;height:100%;padding-top:5px;padding-bottom:5px;display:inline-block;'><h2 style='color:#444'>STM32F769I-DISCOVERY Board with ARM Cortex F7 CPU</h2><br>";
								for(j = 1; j <= 5; j++)
								{	
									html += "<div class='LIobject' onclick='openIMG(this)'><img src='console/STM32F7 ("+j+").jpg' width='"+picSize[0]+"' height='"+picSize[1]+"' id='opdrachtIMG' class='LIimage'/><br>";
									
									html += "<div class='LIoverlay'><div class='LIOverlaytext'><h4 style='font-size:12px;'>"+picText[j-1]+"</h4></div></div>";

									html += "</div>";
								}
								
								html += "<br><br>";
								html += "</div><br>";
								
								html += "<br><br><span class='titleCard'>Video</span><br>";
								html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='800' height='500' src='https://www.youtube.com/embed/3y7qlbfVuak' frameborder='0' allowfullscreen></iframe><br><br>";
								html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='800' height='500' src='https://www.youtube.com/embed/adc3KM2hvuI' frameborder='0' allowfullscreen></iframe><br><br>";
							}
						
							if(file[0].endsWith(".jpg"))
							{
								if(file[1] == null) file[1] = 620;
								if(file[2] == null) file[2] = 520;
								html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{height: 20%; border:solid 6px #555;} </style>";
								
								html += "<div style='width:20px;' class='LIobject' onclick='openIMG(this)'><img src='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"' id='opdrachtIMG' class='LIimage'/></div><br><br>";
							}
							else if(file[0].endsWith(".pdf"))
							{
								if(file[1] == null) file[1] = 720;
								if(file[2] == null) file[2] = 700;
								html += "<object data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
								
							}
							else if(file[0].startsWith("http") || file[0].startsWith("https"))
							{	
								html += "<iframe src='"+files[i]+"' width='800' height='1000' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <br><br><p><a class='link' href='"+files[i]+"'>Handheld Console With Wireless Controllers and Sensors (Arduino MEGA & UNO)</a></p>";
							}
							html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br><hr>";
						
						style.innerHTML += html;
					}
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
