<?php
	include "styleswitch.inc";
	$main_page = "school";
	$page = "physproto";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Physical Prototyping</title>
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

				<h2 id='title' style='margin-bottom: 0;'>
					<script>document.getElementById("title").innerHTML = document.title;</script></h2>
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Johan Otten</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
					
				<br><br><hr>
				<div id="overzicht"></div><hr>
				<div id='opdrachten'></div>
				
				<!-- Handmatige tekeningen !-->
				<script>
					var titles = ["3D Printed Ring", "Construction Bridge", "Raspberry PI Case", "Doorhandle Design", "iPhone Cover", "Log"];
					var files = ["Ring", "Brug", "Behuizing", "Deurklink", "Telefoonhoes", ""];
					var datums = ["16-05-2018", "06-06-2018", "23-6-2018", "18-6-2018", "29-6-2018", "29-6-2018"];
					var desc = ["Printed with an Ultimaker 2+, made in OnShape CAD<br><br><i><b>Material:</b> White PLA</i>", "Printed with a Creality CR-10 MINI printer, made in OnShape CAD<br><br><i><b>Material:</b> 1.75mm FormFutura EasyWood Coconut PLA (Woodfibers fused within PLA plastic)<br><b>Printing time:</b> 1 hour and 11 minutes</i>", "Printed with a Creality CR-10 MINI printer, made in OnShape CAD<br>The Raspberry PI 3 Model B+ didn't fit.<br><br><i><b>Material:</b> 1.75mm FormFutura EasyWood Coconut PLA (Woodfibers fused within PLA plastic)<br><b>Printing time:</b> 5 hours and 5 minutes</i>", "Printed with a Creality CR-10 MINI printer, made in OnShape CAD<br><br><i><b>Material:</b> White PLA</i><br><i><b>Printing time:</b> 11 hours</i>", "The print failed unfortunately, because the extruder kept getting clogged up. <br>Material in the extruder expands when cooled, hence causing the clogging.<br><br>Here's the link:", "Working hours & Information"];
					var links = ["https://cad.onshape.com/documents/9a66e850a056981f91d970cb/w/80a03009507716527b075893/e/ebd4a7f548aefdcd653ed51c", "https://cad.onshape.com/documents/118f23241dc0174c8db0c4a1/w/57073b6fa32ab5e36a9974f6/e/bb8f545c0888c0cffda85e40", "https://cad.onshape.com/documents/68fe4dfda18a1b32ea9a86e5/w/a2a8eaf3cd572b585a358102/e/83a3cff70a19a119d4c3f61b", "https://cad.onshape.com/documents/c295d20af3da8e72775f19c7/w/764f0a9df47417147afd6571/e/139aa7136a353569fdfef5d1", "https://cad.onshape.com/documents/4c81afbf3c814e377bad6690/w/b2f83d65f5b362dd3c4314d7/e/852de098ee5e6b4fed31405b"];
					
					for(i = titles.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById('opdrachten');
						var file = files[i].split(":");
						var data = file[0].split(",");
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4>";
						
						html += "<div style='color:#333; font-style:normal;'>"+desc[i]+"</div><br>";
						if(titles[i] != "Alles" && titles[i] != "Logboek" && titles[i] != "Reflectieverslag") html += "<a class='link' target='_blank' href='"+links[i]+"'>OnShape Link</a><br><br>";
						
						html += "<style> .LIobject{margin-right: 20px; box-shadow: 5px 5px 15px #222; transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; box-shadow: 5px 5px 15px #222;border:solid 2px white; border-radius:5px; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:50%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;}\
					\
					.LIobjectHeight{margin-right: 20px; box-shadow: 5px 5px 15px #222; transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimageHeight{filter: contrast(75%) saturate(50%); opacity: 1; box-shadow: 5px 5px 15px #222;border:solid 2px white; border-radius:5px; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIGHeight{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 30%; height:92%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIGHeight:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIGHeight{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIGHeight:hover{cursor:zoom-out; opacity:1;}\
.LIimageHeight:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobjectHeight:hover{border:solid 6px #555;}\
					</style>";
						
					
						for(j = 0; j < data.length; j++)
						{
							if(titles[i] == "Log")
							{
								html += "<object style='clear:both;' data='schoolwerk/physprot/Logboek.pdf' width='700' height='720'></object><br><br>";
							}
							else
							{
								if(!data[j].endsWith(".jpg"))
								{
									if(files[i] == "Telefoonhoes")
									{
										html += "<div class='LIobjectHeight' onclick='openIMGHeight(this)' min-width:19%;><img src='schoolwerk/physprot/"+data[j]+".jpg' width='400' height='500' class='LIimageHeight'/></div>";
									}
									else 
									{
										for(d = 1; d <= 3; d++) html += "<div class='LIobject' onclick='openIMG(this)' min-width:19%;><img src='schoolwerk/physprot/"+data[j]+" ("+d+").jpg' width='300' height='300' class='LIimage'/></div>";
									}
								}

								html += "<br><br><br><a style='margin-bottom:10px;' download href='schoolwerk/physprot/"+data[j]+".stl'><div class='download' style='width:180px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download STL<img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a>";
							}
						}
						
						html += "<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
						
						style.innerHTML += html;
					}
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc";?>
	
</body>
</html>