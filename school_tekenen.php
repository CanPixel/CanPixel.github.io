<?php
	include "styleswitch.inc";
	$main_page = "school";
	$page = "tekenen";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Drawing</title>
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

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
					
				<br><br><hr>
				<div id="overzicht"></div><hr>
				
				<h3>Weekly drawings:</h3> <br>	
				<ul id="tabel"></ul><br> <hr> <br>
				
				<div id='opdrachten'></div>
				
				<!-- Wekelijkse tekeningen, semi-automatisch systeem voor het laden van de .pdf'jes !-->
				<script>
					var datums = ["28 September 2017", "9 Oktober 2017", "16 Oktober 2017", "30 Oktober 2017"];
					
					
					for(i = 1; i <= datums.length; i++)
					{
						var tabel = document.getElementById("tabel");
						
						var lesPage = "<style> #opdracht {width:300px;} #opdracht:hover {transition: background-color 0.4s ease; background-color:white; padding:10px 0px; margin-top:-10px; margin-bottom:-10px;} #opdracht:hover:first-child {margin-top: -15px;}";
						
						lesPage += "</style>" + 	
									  "<a style='text-align:center; font-size:12px;' href='schoolwerk/tekenen/CanUr_les" + i + ".pdf'>" +
									  "<li id='opdracht'>" + 
									  "<h3 style='font-size:20px;'>Week " + i + " - " + 
									  "<i style='font-size:15px;'>" + datums[i-1] + "</i>" + 
											"</h3></li></a><br />";
						tabel.innerHTML += lesPage;
					}
				</script>
				
				<!-- Handmatige tekeningen !-->
				<script>
					var titles = ["All drawing lessons", "Charcoal", "Drawing apples"];
					var files = ["pdf/UrCan_Tekenen.pdf:820:900", "schoolwerk/tekenen/houtskool.jpg, schoolwerk/tekenen/schedel.jpg", "Appel"];
					var datums = ["26-12-2017", "17-10-2017", "07-03-2018"];
					
					for(i = 0; i < titles.length; i++)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById('opdrachten');
						var file = files[i].split(":");
						var data = files[i].split(",");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4>";
						
						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
						.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
						.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 55%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
						.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
						.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
						.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
						.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{height: 20%; border:solid 6px #555;} </style>";
						
						for(j = 0; j < data.length; j++)
						{
							if(data[j].endsWith(".jpg"))
							{
								html += "<div class='LIobject' onclick='openIMG(this)' min-width:49%;><img src='"+data[j]+"' width='400' height='400' class='LIimage'/></div>";
							}
							else if(file[0].endsWith(".pdf"))
							{
								if(file[1] == null) file[1] = 720;
								if(file[2] == null) file[2] = 700;
								html += "<object data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
							}
							else if(files[i] == "Appel")
							{
								for(k = 1; k < 9; k++)
								{
									html += "<div class='LIobject' onclick='openIMG(this)' min-width:49%;><img src='schoolwerk/tekenen/Appel"+k+".jpg' width='400' height='400' class='LIimage'/></div>";
								}
							}
						}
						
						html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
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
