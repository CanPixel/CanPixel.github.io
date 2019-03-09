<?php
	include "styleswitch.inc";
	$main_page = "school";
	$page = "modelen";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Modeling</title>
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
				<?php include "schoolMenu.inc"; ?>

				<h2 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Suus Looijen</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Ga terug</a>
				<a id="forwardButton" href="javascript:history.forward()">Volgende --></a>
					
				<br><br><hr>
				<div id="overzicht"></div><hr>
				<div id='opdrachten'></div>
				
				<!-- Handmatige tekeningen !-->
				<script>
					var titles = ["Vliegmachine - Dieselpunk Exosuit", "One Stringed Guitar", "Low Poly Kasteel"];
					var files = ["Vlieg", "modelen/Djentstick.jpg:500:300", "images/Kasteel.jpg:600:600"];
					var datums = ["04-04-2018", "22-02-2018", "15-02-2018"];
					
					for(i = 0; i < titles.length; i++)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById('opdrachten');
						var file = files[i].split(":");
						var data = file[0].split(",");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4>";
						
						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
						.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
						.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 55%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
						.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
						.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
						.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
						.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} </style>";
						
						var modelCount = 16;
						
						if(files[i] == "Vlieg")
						{
							html += "<h4>906 Faces | 938 Vertices | 1.892 Tris</h4><br>";
							var width = 200;
							var height = 200;
							for(l = 1; l < modelCount+1; l++)
							{
								if(l == 1) 
								{
									width = 500;
									height = 300;
								}
								else 
								{
									width = 200;
									height = 200;
								}
								
								if(l == 2) html += "<br><h3>Shaded Wireframe</h3>";
								if(l == 8) html += "<br><h3>Textured</h3>";
								if(l == 15) html += "<br><h3>UV Map / Texture</h3>";
								
								html += "<div class='LIobject' onclick='openIMG(this)' min-width:49%;><img src='modelen/model ("+l+").jpg' width='"+width+"' height='"+height+"' class='LIimage'/></div>";
								
								if(l == 1) html += "<br>";
							}
						}
						else
						{
							for(j = 0; j < data.length; j++)
							{
								var width = 400;
								var height = 400;
								if(file.length > 1)
								{
									width = file[1];
									height = file[2];
								}
								if(data[j].endsWith(".jpg"))
								{
									html += "<div class='LIobject' onclick='openIMG(this)' min-width:49%;><img src='"+data[j]+"' width='"+width+"' height='"+height+"' class='LIimage'/></div>";
								}
							}
						}
						
						html += "<br><br><hr><br><a href='#top'><div class='download' style='width:380px; margin:auto;'>&uarr; Breng me terug naar boven! &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
				</script>
			</div>
		</section>
	</div>
	
	<?php
		include "footer.inc";
	?>
	
</body>
</html>
