<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projects</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; max-width:70%; width:70%; height:auto; margin-left:5%;">
		<section class="content">
		<br>
		<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
			<h2 id='title'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
			
			<p style="width:80%; margin:auto;">Some personal experiments. <br><a href="school_illustrator.php" class="link">Posters, One Page Design Docs</a>, <a href="http://studenthome.hku.nl/~can.ur/school_animatie.php#AnimerenopGeluid" class="link">Animations</a>, <a href="http://studenthome.hku.nl/~can.ur/school_collaborativedesign.php#2mFilmSci-FiConcept" class="link">Videos</a></p><br>
			
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
		
			<div id='projMenu'></div>
			
			<script>
				var files = ["images/SCPTE.jpg:200:200", "images/PixelThrive.jpg:200:200", "images/biq.jpg:200:200", "images/PixelCan.jpg:200:200", "images/pixelBoi_1.jpg:200:200", "kernel_sweep/icon.png:200:200", "console/STM32F7 (3).jpg:200:200", "images/KrautKill.png:200:200", "lifesentence/lifesentencelogo.jpg:200:200", "images/friskingruins.jpg:200:200", "images/DevJamLogo.png:200:200", "images/SuperCasaNova.gif:200:200", "images/kookoologo.png:200:200", "images/AnyWalkerLogo.jpg:200:200", "images/Print.jpg:200:200"];
				var links = ["scpte.php", "pixelthrive.php", "biq.php", "pixelcan.php", "school_ifthisthenthat.php", "school_playfulworlds.php", "school_console.php", "school_vrij.php", "school_playfulworlds2.php", "friskingruins.php", "devjam.php", "supercasanova.php", "", "anywalker.php", "school_multiplatform.php"];
				var titles = ["SCP-The Escape (Java)", "PixelThrive (Java)", "BIQ (Construct 2)", "PixelCan (Admission)", "PixelBoi (Arduino)", "Kernel . Sweep (Unity)", "The DynaCon (STM32F7)", "Kraut Kill (Unity)", "Life Sentence (Unity)", "Frisking Ruins (Unity)", "DevJam", "SuperCasaNova (PICO-8)", "Koo-Koo (Alt.Ctrl GDC)", "AnyWalker (Unity Tool)", "PRINTSYS Gaming System"];
				var datums = ["27-02-2013", "??-??-2014", "04-04-2015", "08-06-2017", "20-01-2018", "30-03-2018", "06-06-2018", "20-06-2018", "30-06-2018", "22-10-2018", "29-10-2018", "11-11-2018", "17-01-2019", "19-01-2019", "19-01-2019"];
			
				for(i = 0; i < files.length; i++)
				{
					var style = document.getElementById("projMenu");
					var html = "<span style='margin-bottom:-500px;width:50px;' id='art'></span>";
					
					html += "<style> .LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 50%; height:97%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{opacity:1; cursor:zoom-out;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{cursor:zoom-out; opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); cursor:zoom-in; border:solid 6px #444;} \
.LIobject:hover{height: 230px; border:solid 6px #555;} .LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 90%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIoverlay:hover{background-color: #555;}</style>";
					
					var file = files[i].split(":");
					if(file[1] == null) file[1] = '200';
					if(file[2] == null) file[2] = '200';
					
					if(file[0] == "images/PixelCan.jpg")
					{
						var num = Math.floor((Math.random() * 6) + 1);
						file[0] = "images/PixelCan"+num+".jpg";
					}
					else if(file[0] == "images/PixelThrive.jpg")
					{
						var num = Math.floor((Math.random() * 2 + 1));
						file[0] = "images/PixelThriveLogo"+num+".jpg";
					}
					
					html += "<div style='display:inline-block;'>";
					html += "<h4 style='margin-bottom:0;'>"+datums[i]+"</h4>";
					
					html += "<div class='LIobject' onclick='openIMG(this)' height='150px'><img src='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"' class='LIimage'/>";
					
					html += "<div class='LIoverlay'><a style='cursor:pointer;color:black;' href='"+links[i]+"'><div class='LIOverlaytext'><h4 style='font-size:14px;'>"+titles[i]+"</h4></div></a></div></div></div>";
					
					style.innerHTML += html;
				}
			</script><br>
			
			<br><a href='pdf/CanUrPortfolio.pdf' target="_blank"><div class='download' style='width:380px; margin:auto;'>See my older work (.pdf in Dutch)</div></a><br>
			
			</div></div> <br>
			
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				
			<h2>MIDI Music</h2>
			<div id='midi'></div>
				
			<?php
				//GENRES:
				//0: Metal
				//1: Rock
				//2: Progressive
				//3: Blues
				//4: Classical
				//5: Swing
				//6: Retro
				$allgenres = array("Metal", "Rock", "Progressive", "Blues", "Classical", "Swing", "Retro");
				$dir = "audio/";
				if(is_dir($dir)) {
					if($dh = opendir($dir)) {
						while (($file = readdir($dh)) !== false) {
							if(strlen($file) <= 2) continue;
							$num = (int)(substr($file, 0, 1));
							$genre = $allgenres[$num];
							echo "<div style='margin:10px; background-color:#666;padding:10px;width:40%;display:inline-block; text-align:left;'><h3 style='margin-bottom:5px;background-color:#999;padding:10px;margin-right:20px;font-size:30px;'>" . str_replace("@FL", "", str_replace("_", " ", substr($file, 1, strlen($file)-5))) . "</h3><br><audio style='width:93%;' controls src='audio/" . $file . "'></audio><br><br><span style='font-size:17px;'><b>Genre:</b> ".$genre."</span><p style='font-size:14px;'>Made in Guitar Pro 5" . (\strpos(substr($file, 0, strlen($file)-4), '@FL')? " & Mixed in FL Studio 12" : "") . "</p><br></div>";
						}
						closedir($dh);
					}
				}
			?>	
			</div></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
	
</body>
</html>