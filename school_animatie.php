<?php
	include "styleswitch.inc";
	$page = "animatie";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animation</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php include "header.inc"; include "menu.inc"; ?>
	
	<div style="float:left; max-width:73.8%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<?php include "schoolMenu.inc"; ?>

				<h2 id='title' style='margin-bottom: 0; font-size:50px;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Raf Croonen</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
					
				<br><br><hr>
				
				<div id="overzicht"></div> <hr>
				<div id='opdrachten'> </div>
				
				<script>
					var titles = ["Frame by Frame", "Stop-motion", "Pixilation", "Walk Cycles", "Animating on sound", "Lipsync Animation", "Greeting card"];
					var datums = ["21-09-2017", "28-09-2017", "5-10-2017", "23-11-2017", "28-11-2017", "6-12-2017", "14-12-2017"];
					var files = ["schoolwerk/animatie/IMG_0885.gif, schoolwerk/animatie/IMG_0893.gif, schoolwerk/animatie/IMG_0887.gif, schoolwerk/animatie/IMG_0888.gif, schoolwerk/animatie/IMG_0886.gif", "schoolwerk/animatie/boerkapen.mp4, schoolwerk/animatie/snoeptomaat.mp4", "https://www.youtube.com/embed/GndxV-MVU48", "schoolwerk/animatie/Animeren_WalkCycles_1.mp4, schoolwerk/animatie/WalkingDing.mp4, schoolwerk/animatie/Ballerina.mp4, schoolwerk/animatie/Animeren_WalkCycles_Extra.mp4", "schoolwerk/animatie/40Sec.mp4", "schoolwerk/animatie/Animeren_LipSync.mp4", "schoolwerk/animatie/Kerstkaart.mp4"];
					
					var style = document.getElementById("opdrachten");
					
					for(i = files.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var html = "<style>.gif{margin-bottom:2px;padding:5px; display:inline-block; margin-right: 5px; margin-left: 5px;}</style><span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>Les " + (i + 1) + ": " + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><br>";
						
						html += "<style> .LIobject{margin-right: 5px; box-shadow: 5px 5px 15px #222; transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; box-shadow: 5px 5px 15px #222;border:solid 2px white; border-radius:5px; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{height: 20%; border:solid 6px #555;} </style>";
						
						var data = files[i].split(",");
						if(files[i].endsWith(".gif"))
						{
							for(j = 0; j < data.length; j++)
							{
								html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='"+data[j]+"' width='180px'/></div>";
							}
							html += "<br>";
						}
						else if(files[i].endsWith(".mp4"))
						{	
							var data = files[i].split(",");
							for(j = 0; j < data.length; j++)
							{
								var width = 480;
								var height = 320;
								var poster = "";
								var loop = true;
								var preload = "metadata";
								
								if(titles[i].startsWith("Lipsync"))
								{
									width = 1040;
									height = 585;
									loop = false;
									poster = "schoolwerk/animatie/Animatie_lipsyncthumbnail.jpg";
									preload = "auto";
								}
								else if(titles[i].startsWith("Animating on sound"))
								{
									width = 1080;
									height = 610;
									loop = false;
									preload = "auto";
								}
								else if(titles[i].startsWith("Greeting card"))
								{
									width = 1065;
									height = 600;
									loop = true;
									preload = "auto";
								}
								
								html += "<div style='display:inline-block;'>";
								if(data[j].endsWith("WalkCycles_1.mp4")) html += "<h4> Lopen </h4>";
								else if(data[j].endsWith("WalkingDing.mp4")) html += "<h4> Schuivelen </h4>";
								else if(data[j].endsWith("Ballerina.mp4")) html += "<h4> Ballerina </h4>";
								else if(data[j].endsWith("WalkCycles_Extra.mp4")) html += "<h4> Springen + Sjaal </h4>";
								else if(data[j].endsWith("LipSync.mp4")) html += "<h4>ft. <a target='_blank' href='http://studenthome.hku.nl/~bart.slot/' class='link'>Bart Slot</a> </h4>"
								html += "<video preload='metadata' width='"+width+"' height='"+height+"' " + ((loop)? "loop" : "") + " poster='"+poster+"' controls style='border:none; border-radius:10px; box-shadow: 5px 5px 15px #222; border-radius:15px; margin: 0 20px;'> <source src='"+data[j]+"' type='video/mp4'>Your browser does not support the video tag. </video></div>";
							}
							html += "<br>";
						}
						else if(files[i].startsWith("https://"))
						{
							var data = files[i].split(",");
							for(j = 0; j < data.length; j++)
							{
								html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='1080' height='608' src='https://www.youtube.com/embed/GndxV-MVU48' frameborder='0' allowfullscreen></iframe>";
							}
							html += "<br>";
						}
						
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc";?>
</body>
</html>