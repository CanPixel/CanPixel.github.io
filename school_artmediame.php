<?php
	include "styleswitch.inc";
	$page = "artmediame";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Art, Media & Me</title>
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
				
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Martin Lacet & John Hennequin</h4><br>
				
				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a><br>

				<br><br><hr><div id="overzicht"></div><hr>
				<div id="opdrachten"></div>
				
				<script>
				var datums = ["18-10-2017", "31-10-2017", "20-11-2017", "29-11-2017"];
				var files = ["schoolwerk/art/Art ", "pdf/UrCan_AMM_Museumopdracht.pdf", "[images/AMM_Zelfportret_Draw.jpg, images/AMM_ZelfPortret_Raw.jpg, images/AMM_ZelfPortret.jpg]", "https://youtu.be/02K3HO1yZDI"];
				var titles = ["Art Gallery", "Stedelijk Museum Amsterdam", "Self Portrait", "Ethical Compass"];
				var descs = ["My favorite interactions with art:", "Assignment for the Stedelijk Museum, in Amsterdam", "Ink on paper, with digital enhancements. <br> <br> <a class='link' href='pdf/UrCan_AMM_Stijlverantwoording.pdf'>Stijlonderzoek & Verantwoording</a>", "Reflect in a 1 min video how you are accountable for any negative effects of your work on users. <br> How did this change your perspective on the subject?"];
					
				for(j = files.length-1; j >= 0; j--)
				{
					document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - j].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - j]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - j]+"</span></a>";
					
					if(files[j].endsWith(".pdf"))
					{
						var style = document.getElementById("opdrachten");
						var html = "<span class='anchorOffs' id='"+(titles[j].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[j] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[j]+"</h4><p style='width:80%; margin:auto;'>" + descs[j] + "</p><br>";
						var file = files[j].split(":");
						if(file[1] == null) file[1] = 900;
						if(file[2] == null) file[2] = 900;
						html += "<object data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
					else if(files[j].startsWith("http"))
					{
						var style = document.getElementById("opdrachten");
						var html = "<span class='anchorOffs' id='"+(titles[j].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[j] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[j]+"</h4><p style='width:80%; margin:auto;'>" + descs[j] + "</p><br>";
						
						html += "<iframe style='border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='1080' height='680' src='https://www.youtube.com/embed/"+files[j].slice(files[j].length-11, files[j].length)+"' frameborder='0' allowfullscreen></iframe><br>";
						
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
					else if(files[j].startsWith("["))
					{
						var style = document.getElementById("opdrachten");
						var html = "<span class='anchorOffs' id='"+(titles[j].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[j] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[j]+"</h4><p style='width:80%; margin:auto;'>" + descs[j] + "</p><br>";
						var file = files[j].replace('[', '').replace(']', '').split(",");
						
						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 30%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIoverlay:hover{background-color: #555;}</style>";
						
						for(m = 0; m < file.length; m++)
						{
							name = "";
							if(m == 0) name = "Raw Drawing (Ink)";
							else if(m == 1) name = "Digital Refinement & Filters";
							else name = "Final Result";
							html += "<div class='LIobject' onclick='openIMG(this)' height='150px'><img class='LIimage' src='"+file[m]+"' width='340' height='420' /><div class='LIoverlay'><div class='LIOverlaytext'><h4 style='font-size:16px;'>"+name+"</h4></div></div></div></div>";
						}
						
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
					else if(files[j].endsWith("Art "))
					{
						var style = document.getElementById("opdrachten");
						var html = "<span class='anchorOffs' id='ArtGallery'></span>";
						style.innerHTML += "<br>";
						style.innerHTML += "<h3 style='clear:both;'>" + titles[j] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[j]+"</h4><p style='width:80%; margin:auto;'>" + descs[j] + "</p><br>";

						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
		.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
		.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
		.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
		.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
		.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
		.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{ border:solid 6px #555;} </style>";
						for(i = 1; i <= 52; i++)
						{

							html += "<div class='LIobject' onclick='openIMG(this)' min-width:19%;><img src='"+files[j]+"("+i+").jpg' width='200' height='200' class='LIimage'/></div>";
						}
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						style.innerHTML += html;
					}
				}
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>