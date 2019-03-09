<?php
	include "styleswitch.inc";
	$main_page = "school";
	$page = "visueeldenken2";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visueel Denken</title>
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
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Stephan Duquesnoy</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Ga terug</a>
				<a id="forwardButton" href="javascript:history.forward()">Volgende --></a>
					
				<br><br><hr>
				
				<div id="overzicht"></div> <hr>
				<div id='opdrachten'> </div>
				
				<script>
					var titles = ["Basisvormen Abstractie", "Tonaliteit en Values", "Referentievormen in Portretten", "Isometrisch", "Schilderij Isometrisch"];
					var datums = ["07-05-2018", "16-05-2018", "23-05-2018", "29-05-2018", "10-06-2018"];
					var files = ["[schoolwerk/tekenen/Abstr1.jpg * schoolwerk/tekenen/Abstr2.jpg]", "[schoolwerk/tekenen/visueeldenken/tones.jpg * schoolwerk/tekenen/visueeldenken/values.jpg]", "schoolwerk/tekenen/visueeldenken/ObjectPortret.jpg:500:650", "schoolwerk/tekenen/visueeldenken/Isometrisch.jpg:500:600", "schoolwerk/tekenen/visueeldenken/VerfLotl.jpg:550:550"];
					
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
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} </style>";
						
						var data = files[i].split(",");
						if(files[i].endsWith(".gif"))
						{
							for(j = 0; j < data.length; j++)
							{
								html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='"+data[j]+"' width='180px'/></div>";
							}
							html += "<br>";
						}
						var sub = files[i].split(":");
						if(sub[0].endsWith(".jpg") || files[i].endsWith(".jpg") || files[i].startsWith("[") || files[i].endsWith("["))
						{
							if(files[i].startsWith("[") || files[i].endsWith("["))
							{
								var file = files[i].replace('[', '').replace(']', '').split('*');
								
								for(j = 0; j < file.length; j++)
								{
									html += "<div class='LIobject' onclick='openIMG(this)' min-width:19%;><img src='"+file[j]+"' width='500' height='500' class='LIimage'/></div>";
								}
								html += "<br>";
							}
							else
							{
								var width = 500;
								var height = 500;
								if(sub.length > 1)
								{
									width = sub[1];
									height = sub[2];
								}
								html += "<div class='LIobject' onclick='openIMG(this)' min-width:19%;><img src='"+sub[0]+"' width='"+width+"' height='"+height+"' class='LIimage'/></div>";
								html += "<br>";
							}
						}
						else if(files[i].startsWith("https://"))
						{
							var data = files[i].split(",");
							for(j = 0; j < data.length; j++)
							{
								html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='800' height='500' src='https://www.youtube.com/embed/GndxV-MVU48' frameborder='0' allowfullscreen></iframe>";
							}
							html += "<br>";
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
