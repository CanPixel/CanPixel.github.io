<?php
	include "styleswitch.inc";
	$page = "principlesgamedesign";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Principles of Game Design</title>
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

				<h2 id='title' style='margin-bottom: 0; font-size:36px;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Micah Hrehovcsik</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Ga terug</a>
				<a id="forwardButton" href="javascript:history.forward()">Volgende --></a>
				
				<br><br><hr><div id="overzicht"></div><hr>
				<div id="opdrachten"></div>

				<script>
					var datums = ["17-12-2017"];
					var files = ["pdf/UrCan_GameDesign_Notebook.pdf"];
					var titles = ["Principles of Game Design: Notebook"];
					var descs = ["In-class, Take Home en Read & Reflect- challenges gedurende de module."];
					
					for(i = datums.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,'').replace(':', ''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,'').replace(':', ''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p style='width:80%; margin:auto;'>" + descs[i] + "</p><br>";
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
								
								html += "<div class='LIobject' onclick='openIMG(this)'><img src='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"' id='opdrachtIMG' class='LIimage'/></div><br><br>";
							}
							else if(file[0].endsWith(".pdf"))
							{
								if(file[1] == null) file[1] = 720;
								if(file[2] == null) file[2] = 700;
								html += "<object data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
								
								html += "<br><a style='margin-bottom:10px;' download href='"+files[i]+"'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br><br>";
							}
						
							html += "<hr><br><a href='#top'><div class='download' style='width:380px; margin:auto;'>&uarr; Breng me terug naar boven! &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
