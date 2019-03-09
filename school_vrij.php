<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
	$page = "vrij";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kraut Kill</title>
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
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Project Free</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
					
				<br><br><hr>
				<div id="overzicht"></div><hr>
				<div id='opdrachten'></div>
				
				<!-- Handmatige tekeningen !-->
				<script>
					var titles = ["Research", "Progress Gallery", "Development", "Build"];
					var datums = ["18-6-2018", "20-6-2018", "20-6-2018", "1-7-2018"];
					var files = ["pdf/Project_Vrij_Team8_Research.pdf", "", "", ""];
					
					var currentVersion = 1.0;
					
					for(i = titles.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById('opdrachten');
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4>";
						
						html += "<h4>Loes Banken, Bränn Danker, Joris Dingelstad, Machiel Kapiteijn, Can Ur</h4>";
						
						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
						.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
						.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 80%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
						.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
						.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
						.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
						.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} </style>";
						
						if(files[i].endsWith(".pdf"))
						{							
							html += "<object data='"+files[i]+"' width='800' height='900'></object><br><br>";
						}
						if(titles[i] == "Progress Gallery")
						{
							var width = 320;
							var height = 200;
							var pics = 8;
							for(l = 1; l < pics+1; l++)
							{	
								html += "<div class='LIobject' onclick='openIMG(this)' min-width:49%;><img src='images/vrij ("+l+").jpg' width='"+width+"' height='"+height+"' class='LIimage'/></div>";
							}
						}
						else if(titles[i] == "Build")
						{
							html += "<br><span class='titleCard'>Showcase:</span><br>";
							html += "<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='1080' height='480' src='https://www.youtube.com/embed/cnydgqwTZ-s' frameborder='0' allowfullscreen></iframe><br><br><br>";
							
							html += "<h3>Kraut Kill v"+currentVersion+"</h3><a style='margin-bottom:10px;' download href='KrautKill.zip'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br>";
						}
						else if(titles[i] == "Development")
						{
							var links = ["d_-04LQVqNo", "qFwQU0rWwsE", "dASjzabLNTI", "y0s1fp9bb1I", "wFC2MJ-lh6U", "QpCZ-VI6A8E"];
							
							for(j = 0; j < links.length; j++)
							{	
								html += "<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='480' height='220' src='https://www.youtube.com/embed/"+links[j]+"' frameborder='0' allowfullscreen></iframe>";

								html += "</div>";
							}
							html += "<p style='clear:both;'></p><br>";
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
