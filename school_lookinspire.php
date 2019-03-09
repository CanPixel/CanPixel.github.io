<?php
	include "styleswitch.inc";
	$page = "lookinspire";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Look & Inspire</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; width:73.8%; height:auto; margin-left:2.5%;">
		<section name='top' class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<?php include "schoolMenu.inc"; ?>
				<h2 id='title' style='margin-bottom:0;'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
				
				<h4 style='font-style: italic; font-size:14px; margin-top:1px;'>Richard van Tol, Norbert van Geijn, Corné van Delft, Henk Fakkeldij</h4><br>
				
				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr>
				<div id="overzicht"></div>
				<hr>
				
				<div id="opdrachten"></div>

				<script>
				var datums = ["29-8-2017", "8-9-2017", "10-9-2017", "12-9-2017", "27-9-2017", "18-10-2017", "19-10-2017"];
				var files = ["objectMenu", "ordeningMenu", "text", "schoolwerk/lookandinspire/Glass.jpg", "objectMenu2", "schoolwerk/lookandinspire/OntwerpProces.jpg:800", "schoolwerk/lookandinspire/Poster.jpg:700:550"];
				var titles = ["12 Objects", "25 Arrangements", "Observe", "The chosen item", "Collect", "The 13th object", "Post Mortem Look & Inspire - Poster"];
				var descs = ["The collecting of 12 random objects + locations", "25 Arrangements of the items, according to the L.A.T.C.H method.", "My 3 favorite arrangements: <div style='width:40%; margin:auto; padding:5px; border:solid 4px #888;'><a style='font-size:28px;' href='schoolwerk/lookandinspire/ordeningen/C1.jpg'><h3>C1</h3></a> <i> I like this arrangement because of its color-specific groups. </i> <br> <br> <hr> <a href='schoolwerk/lookandinspire/ordeningen/A3.jpg'><h3>A3</h3></a> <i> The objects match eachother in an appealing way. </i> <br> <br> <hr> <a href='schoolwerk/lookandinspire/ordeningen/H5.jpg'><h3>H5</h3></a> <i> The gradual transition from small to big, is nice here. </i> <br><br></div> ", "Out of my collections I choose this object: <fieldset style='background-color:#888;'> <h2>Miniglass</h2> <h4>These objects are along with 'The Pencil' and 'Wood', the most interesting for me, because they have one thing in common: they are smaller than the scale they're usually associated with. And thus, my chosen theme is   <b style='font-size:28px;'><i>Scale (Grootte).</i></b></h4></fieldset>", "The collection of 11 objects, in the theme.", "The fabricated 13th object for the new collection. A small-scaled robot head made of black cardboard.<br> Because of its small scale, it brings a feeling of innocence.", "The Game Concept that I created by the collection of items, the arrangements, and the final collection of the items."];
					
				for(i = datums.length - 1; i >= 0; i--)
				{	
					document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,'').replace('&', ''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
					
					var style = document.getElementById("opdrachten");

					var html = "<span id='"+(titles[i].replace(/\s/g,'').replace('&', ''))+"' class='anchorOffs'></span><h3 style='clear:both;'>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p>" + descs[i] + "</p><br>";
					
					var file = files[i].split(':');
					
					if(file[0].endsWith(".pdf"))
					{	
						html += "<object style='clear:both;' data='"+files[i]+"' width='720' height='700'></object><br><br>";
						
						html += "<br><a style='margin-bottom:10px;' download href='"+files[i]+"'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br><br>";
					}
					else if(file[0].endsWith(".jpg"))
					{
						if(file[1] == null) file[1] = 350;
						if(file[2] == null) file[2] = file[1];
						
						if(file[0] == "schoolwerk/lookandinspire/OntwerpProces.jpg")
						{
							for(l = 1; l <= 2; l++) html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='schoolwerk/lookandinspire/13Obj"+l+".jpg' width='"+file[1]/3+"' height='"+file[2]/3+"'/></div>";
							
							html += "<div class='LIobject' onclick='openIMG(this)'><img style='display:inline-block;' class='LIimage' src='schoolwerk/lookandinspire/13Obj3.gif' width='"+file[1]/3+"' height='"+file[2]/3+"'/></div>";
													
							html += "<div class='LIobject'><a href='"+file[0]+"'><img style='border:solid 4px #666; transition:border 0.4s ease; padding:2px; margin:5px 10px;' src='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'/></a></div><br><br>";
						}
						else
						{
							html += "<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'/></div><br><br>";
							
							html += "<object data='pdf/Poster_Definitief.pdf' width='550' height='704'></object><br><br>";
						}
					}
					else if(file[0] == "objectMenu")
					{	
						var objecten = ["Bag", "Glass", "Bubblegum", "Candy", "Cent", "Lighter", "Pencil", "Hairtie", "Stone", "Wood", "Pen", "Leaf"];
						
						for(j = 0; j < objecten.length; j++)
						{	
							html += "<div style='min-width:24%' class='LIobject' onclick='openIMG(this)'>";
							html += "<img class='LIimage' width='220' height='220' src='schoolwerk/lookandinspire/" + objecten[j] + ".jpg' />";
							
							html += "<div class='LIoverlay'><div class='LIOverlaytext'><h4>"+objecten[j]+" - <a href='schoolwerk/lookandinspire/"+objecten[j]+"find.jpg'>Location</a></div></h4></div></div>";
							
							html += "</div>";
						}
						html += "<p style='clear:both;'></p><br>";
					}
					else if(file[0] == "objectMenu2")
					{	
						var objecten = ["Star", "Skate", "Catapult", "Ball", "Button", "Dog", "Key", "Lamp", "Shinything", "Moer", "Mints"];
						
						html += "<style> .LIobject{position:relative; display:inline-block;} .LIimage{border:solid 4px #666; -webkit-transition:border 0.4s ease; transition:border 0.4s ease; padding:2px; margin:5px 10px;} .LIimage:hover{cursor:pointer; border:solid 6px #444;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);}</style>";
						
						for(j = 0; j < objecten.length; j++)
						{	
							html += "<div class='LIobject' onclick='openIMG(this)' style='min-width:24%;'>";
							html += "<img class='LIimage' width='240' height='240' src='schoolwerk/lookandinspire/" + objecten[j] + ".jpg' />";
							
							html += "<div class='LIoverlay'><div class='LIOverlaytext'><h4>"+objecten[j]+"</h4></div></div>";
							
							html += "</div>";
						}
						html += "<p style='clear:both;'></p><br>";
					}
					else if(files[i] == "ordeningMenu")
					{	
						var objecten = ["L", "A", "T", "C", "H"];
						
						html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 65%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} .LIobject:hover{border:solid 6px #555;} </style>";
						
						for(j = 0; j < objecten.length; j++)
						{	
							for(k = 1; k <= objecten.length; k++)
							{	
								html += "<div class='LIobject' style='min-width:19%;' onclick='openIMG(this)'>";
								html += "<img id='bigIMG' class='LIimage' width='180px' height='180px' src='schoolwerk/lookandinspire/ordeningen/" + objecten[j] + k + ".jpg' />";

								html += "<div class='LIoverlay' ><div class='LIOverlaytext'><h4>"+objecten[j]+k+"</h4></div></div>";

								html += "</div>";
							}
						}
						html += "<p style='clear:both;'></p><br>";
					}
					else html += "<br>";
					
					html += "<hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a><br><hr>";
					
					style.innerHTML += html;
				}	
				</script>
			</div>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>