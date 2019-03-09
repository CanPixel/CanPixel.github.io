<?php
	include "styleswitch.inc";
	$page = "illustrator";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Illustrator</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php include "header.inc"; include "menu.inc"; ?>
	
	<div style="float:left; max-width:73.8%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<?php include "schoolMenu.inc"; ?>

				<h2 id='title' style='margin-bottom: 0; font-size:50px;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Course by Jip & Tiago</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
					
				<br><br><hr>
				
				<div id="overzicht"></div> <hr>
				<div id='opdrachten'> </div>
				
				<script>
					var titles = ["Wireframes", "Logo for Chocolate Milk", "One Page Design Poster - Game Concept", "Game Concept Poster Sketch", "Game Concept Poster"];
					var datums = ["16-10-2017", "23-10-2017", "19-11-2017", "27-11-2017", "3-12-2017"];
					var files = ["pdf/UrCan_Wireframe.pdf:800:445", "pdf/logo_choquelechique.pdf:800:555", "pdf/UrCan_OnePager.pdf:800:570", "schets25", "pdf/Poster_Definitief.pdf:550:704"];
					
					var style = document.getElementById("opdrachten");
					
					for(i = files.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var html = "<style>.gif{margin-bottom:2px;padding:5px; display:inline-block; margin-right: 5px; margin-left: 5px;}</style><span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>Lesson " + (i + 1) + ": " + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><br>";
						
											html += "<style> .LIobject{margin-right: 5px; box-shadow: 5px 5px 15px #222; transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; box-shadow: 5px 5px 15px #222;border:solid 2px white; border-radius:5px; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{height: 20%; border:solid 6px #555;} </style>";
						
						var data = files[i].split(",");
						var file = files[i].split(":");
						if(files[i].startsWith("schets25"))
						{
							for(j = 0; j < 3; j++)
							{
								html += "<div class='LIobject' onclick='openIMG(this)' style='display:inline-block;margin-right:15px;'><img class='LIimage' src='schoolwerk/25Schets_"+(j+1)+".jpg' width='280px' height='340px'/></div>";
							}
						}
						else if(files[i].endsWith(".gif"))
						{
							for(j = 0; j < data.length; j++)
							{
								html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='"+data[j]+"' width='180px'/></div>";
							}
							html += "<br>";
						}
						else if(file[0].endsWith(".pdf"))
						{
							if(file[1] == null) file[1] = 720;
							if(file[2] == null) file[2] = 700;
							html += "<object data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
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