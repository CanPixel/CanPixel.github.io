<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DevJam</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; width:73%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
				<h1 id='title' style='margin-bottom: 0;'><script>document.getElementById("title").innerHTML = document.title;</script></h1>
				<br><a id="backButton" href="eigenWerk.php"><-- Back</a><br>
			<br>
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>"Developer VS Developer"</b></h2> <br>
				<div id='foto2'></div> <hr>
				
			<a class='download' target='_blank' id='anchor' href='https://nvriezen.itch.io/devjam' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>View the contest on itch.io</span></a>
			<br><hr><br><br>
				
			<span class='titleCard'>DEVJAM Trailer:</span><br>
			<iframe width="840" height="470" src="https://www.youtube.com/embed/Jvxp2QV1wt4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br> <br> <br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
	<b>The debut of DEVJAM is here! </b><br>
	<i>As of October 29th </i><br> <br>

As part of the Marketing seminar I took, I came up with this idea. <br><br>
	
Combining elements of a standard Game Jam with one of those competitive drawing challenges you probably have seen before. <br><br>

Two developer friends are battling against each other in a deadline time span of two weeks, to create a game in their own way with a certain theme as base.<br>

<br><b>This edition</b><br>
The fierce Game Developers Pixelboii (Me) and <a href='http://studenthome.hku.nl/~niels.vriezen/' class='link' target='_blank'>NVriezen</a>, will compete against eachother for the following week.<br>
Both developers are working hard to prove that only one can be the best.
Creating games in PICO8 for the first time and doing it in only two weeks.
This Dev Jam puts the developers to the test.
<br><br>
<i style='font-size:18px;'>A game contest made by, and for game developers.</i><br> </p> <br>
<br> <hr> <br>
				
				<a style='margin-bottom:10px;' href='https://nvriezen.itch.io/devjam' target='_blank'><div class='download' style='width:400px;height:25px;margin:auto;'>Itch.io page</div></a>
				
				<br> <br>
				</div>
				</div><br></div><br></div>

		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
