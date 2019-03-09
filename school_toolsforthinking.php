<?php
	include "styleswitch.inc";
	$page = "toolsforthinking";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tools for Thinking</title>
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
				
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Corné van Delft</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr><div id="overzicht"></div><hr>
				<div id="opdrachten"></div>
				
				<script>
					var datums = ["10-10-2017", "12-10-2017", "14-10-2017", "24-10-2017"];
					var files = ["pdf/UrCan_PMI.pdf", "pdf/UrCan_Personas_v1.pdf", "pdf/UrCan_Toolsforthinking_Requirements.pdf", "pdf/UrCan_Toolsforthinking_Verantwoording.pdf"];
					var titles = ["PMI-list", "Personas", "List of Requirements", "Style accounting"];
					var descs = ["", "For feeling connected to a certain group of people, a persona comes in very handy. <br> Below are a couple of mine (In Dutch).", "A list of important criteria for this portfolio website.", "A pdf explaining various design choices that play a role during the creation of this website."];
					
					for(i = datums.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var file = files[i].split(":");
						if(file[1] == null) file[1] = 720;
						if(file[2] == null) file[2] = 700;
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p>" + descs[i] + "</p>" + "<object class='LIimage' data='"+file[0]+"' width='"+file[1]+"' height='"+file[2]+"'></object><br><br>";
						
						html += "<br><a style='margin-bottom:10px;' download href='"+file[0]+"'><div class='download' style='width:150px;height:25px;margin:auto;'><div style='margin-top:-11px; padding-bottom:5px; padding-right: -2px; border-bottom: 3px solid #676767;'>Download <img src='images/Opslaan.png' width='30' height='30' style='margin-left:5px; margin-top:5px;'/></div></div></a><br><br>";
						
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
