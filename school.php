<?php
	include "styleswitch.inc";
	$page = "school";
	$main_page = "school";
	$year = 1;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About the study</title>
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
				<?php include "schoolMenu.inc";?>
				<h2 id='title'><script>document.getElementById("title").innerHTML = document.title;</script></h2> <br>
				
				<div style="background-color:#AAA;"><br><br>
				<div style="width:80%;margin:auto;">
				<p style="text-align:left;">
				Helloooo there! My name is Can Ur (Yes that is a very short name) and I am a Game Developer & Designer @ <a class="link" target="_blank" href="https://www.hku.nl/">HKU (Utrecht, Netherlands)</a>. <br><br>Oh, yeah, I also make music. I play lead guitar in a band called <a class="link" target="_blank" href="https://www.facebook.com/nemsisband/">NEMSIS</a> <br> <br> Make yourself feel at home.
			</p> <br> <hr> <br>
			<p><b>What is Game Development?</b></p>
			<p style="text-align: justify;">
				In my perspective Game Development is the progression of a digital mechanic. A <i>technological artist</i>.
				Learning new techniques / mechanics / design patterns for game architectures. Developers work behind-the-scenes, on the 'framework' that lurks behind all interactive applications nowadays. <br>
				Thinking of new mechanics, designing, iterating and implementing is what keeps me going. <br> Last but not least, interesting mechanics for me, are the keys for innovative/experimental game design.
			</p><br>
				</div>

				<br>
				
				<img style="width:350px; height:350px; border:solid 8px #BBB; border-radius:2px; overflow:auto; display:inline-block;" src="images/Poppeke.jpg" /> <br><br><br><hr><br>
				<b>The game that got me here: <i><a class="link" href="pixelcan.php" style="font-size:24px;">PixelCan</a></i></b> <br> <br><hr>	<br>			
			</div><br>
			</div>
		</section>
	</div>
	
	<?php
		include "footer.inc";
	?>
	
</body>
</html>