<?php
	include "styleswitch.inc";
	$page = "ifthisthenthat";
	$main_page = "eigenwerk";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PixelBoi Handheld</title>
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
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>If This Then That</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr><div id="overzicht"></div><hr>
				<div id="opdrachten"></div>

				<script>
					var datums = ["21-1-2018", "20-1-2018", "20-1-2018"];
					var files = ["pdf/UrCan_ITTT_Logboek.pdf:600:860", "https://www.instructables.com/id/Handheld-Console-W-Wireless-Controllers-and-Sensor/", "showcase"];
					var titles = ["DevLog", "Behind the scenes - (Instructables)", "Project Showcase"];
					var descs = ["<div style='text-align:center;'>Project Documentation + Development Log</div>", "I had about four weeks to work with Arduino, and create something interesting out of it. <br> I've always wanted to make my own handheld gaming console, so I took the opportunity this project. <br> <br> The <em><i>Cantendo Pixelboi</i></em> is a touchscreen-driven Nintendo GameBoy/Switch-esque device that connects two wireless external controllers (with batteries) together. These controllers put some unique passive (or active) sensors that are on the market in game-context.<br>", "I had about four weeks to work with an <a href='https://www.arduino.cc/' target='_blank' class='link'>Arduino</a> microcontroller, and create something interesting out of it. <br> I've always wanted to make my own handheld gaming console, so I took the opportunity this project. <br> <br> The <em><i>Cantendo Pixelboi</i></em> is a touchscreen-driven Nintendo GameBoy/Switch-esque device that connects two wireless external controllers (with batteries) together. These controllers put some unique passive (or active) sensors that are on the market in game-context.<br>Here is the daily log of design choices and overall development progression of the Pixelboi handheld.<br><br>All design choices, models, code and sounds are made by me."];
					
					for(i = datums.length - 1; i >= 0; i--)
					{
						if(titles[i].endsWith("(Instructables)")) {
							document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' target='_blank' href='"+files[datums.length - 1 - i]+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
							continue;
						}
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,'').replace(':', ''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,'').replace(':', ''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p style='text-align:justify; width:65%; margin:auto;'>" + descs[i] + "</p><br>";
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
								var picText = ["Cantendo Pixelboi", "Wireless Controllers", "Randomized Dialog", "Options Interface", "Main Model Concept", "Intro Sequence"];
								html += "<div style='background-color:#aaaaaa;width:70%;margin:auto;height:100%;padding-top:5px;padding-bottom:5px;display:inline-block;'>";
								for(j = 1; j <= 6; j++)
								{	
									html += "<div class='LIobject' onclick='openIMG(this)'><img src='images/pixelBoi_"+j+".jpg' width='"+picSize[0]+"' height='"+picSize[1]+"' id='opdrachtIMG' class='LIimage'/><br>";
									
									html += "<div class='LIoverlay'><div class='LIOverlaytext'><h4>"+picText[j-1]+"</h4></div></div>";

									html += "</div>";
								}
								
								html += "<br><br>";
								html += "</div><br>";
								
								html += "<br><br><span class='titleCard'>Video</span><br>";
								html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='800' height='500' src='https://www.youtube.com/embed/-sNvqvC2xqk' frameborder='0' allowfullscreen></iframe><br><br>";
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
