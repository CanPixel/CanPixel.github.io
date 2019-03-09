<?php
	include "styleswitch.inc";
	$page = "usability";
	$main_page = "school";
	$year = 1;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Usability</title>
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
				<h4 style='font-style: italic; font-size:16px; margin-top:1px;'>Tim Bosje</h4><br>

				<a id="backButton" href="javascript:history.back()"><-- Back</a>
				<a id="forwardButton" href="javascript:history.forward()">Next --></a>
				
				<br><br><hr>
				<div id="overzicht"></div><hr>
				<div id="opdrachten"></div>
				
				<script>
				
					var datums = ["10-10-2017", "27-10-2017"];
					var files = ["pdf/UrCan_UsabilityTestPlan.pdf",  "pdf/UrCan_UsabilityTestDocument.pdf"];
					var titles = ["Usability Testplan", "Final Test Document"];
					var descs = ["Usability testing plan for the website.", "Final Testplan, Final Testform, Documented results with pictures."];
					
					for(i = datums.length - 1; i >= 0; i--)
					{
						document.getElementById("overzicht").innerHTML += "<a class='download' id='anchor' href='#"+(titles[datums.length - 1 - i].replace(/\s/g,''))+"' style='display:inline-block;margin:10px;'>"+titles[datums.length - 1 - i]+"<br><span style='font-size:13px;float:right;margin-top:5px;'>"+datums[datums.length - 1 - i]+"</span></a>";
						
						var style = document.getElementById("opdrachten");
						
						var html = "<span class='anchorOffs' id='"+(titles[i].replace(/\s/g,''))+"'></span><h3>" + titles[i] + "</h3><h4 style='float:right; margin-top:-75px;'>"+datums[i]+"</h4><p>" + descs[i] + "</p>" + "<object data='"+files[i]+"' width='720' height='780'></object><br><br>";
						
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
