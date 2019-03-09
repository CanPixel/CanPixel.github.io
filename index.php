
<?php
	include "styleswitch.inc";
	$main_page = "index";
?>

<!doctype html>
<html>

<!-- Can's Website -->

<head>
	<title>Can Ur</title>
	<meta charset="UTF-8"> 
	<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
		include "header.inc";
		include "menu.inc";
	?>
	
	<div style="float:left;width:76.6%;height:auto;margin-left:2%;">
		<section class="content">
		<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
			<h2 style='color:black;'>Hello there!</h2>
			
			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:90%; margin:auto;'>

			<div style='width:100%;margin:auto;	animation-name: logoRotate;
	animation-duration: 3.5s;
	animation-iteration-count: infinite;
	animation-timing-function: ease;'>
			<img class='rotate' style="
	animation-name: logoRotate;
	animation-duration: 1.5s;
	animation-iteration-count: infinite;
	animation-timing-function: ease; width:340px; height:350px; border-radius:2px; overflow:auto; display:inline-block; float:left;" src="images/Can_Head.png">
			<h4 style="background-color:#666;padding:20px 10px 10px 10px;font-size:42px;display:inline-block;width:60%;margin-top:250px;">
				Have a warm welcome!
				</h4>
			</div>
				
			<div style="width:87%; display:inline-block; text-align:left;">
			<br>
			<p style='padding:10px;background-color:#AAA;'>
				Helloooo there, my name is Can Ur (Yes that is a very short name), I am a Game Developer & Designer @ <a class="link" target="_blank" href="https://www.hku.nl/">HKU (Utrecht, Netherlands)</a>. <br> <br> As of yet I am in year two. <br>Oh, yeah, I also make music. I play lead guitar in a band called <a class="link" target="_blank" href="https://www.facebook.com/nemsisband/">NEMSIS</a> <br> I also make compositions in MIDI, which you can find <a href='eigenWerk.php#midi' class='link'>here</a>
			</p> <br>
			<p style='padding:10px;background-color:#555;color:#CCC;'><b>What is Game Development?</b></p>
			<p style="text-align: justify;padding:10px;background-color:#AAA;">
				In my perspective Game Development is the progression of a digital mechanic. A <i>technological artist</i>.
				Learning new techniques / mechanics / design patterns for game architectures. Developers work behind-the-scenes, on the 'framework' that lurks behind all interactive applications nowadays. <br>
				Thinking of new mechanics, designing, iterating and implementing is what keeps me going. <br> Last but not least, interesting mechanics for me, are the keys for innovative/experimental game design.
			</p><br>
				<div style='width:100%; margin:auto;'>
			<img style="width:35%; height:500px; border:solid 8px #AAAAAA; border-radius:2px; overflow:auto; display:inline-block;" src="images/Can2.jpg" />
			<img style="width:60%; height:500px; border:solid 8px #AAAAAA; border-radius:2px; overflow:auto; display:inline-block;" src="images/Can.jpg" /></div> <br> <br>
				</div><br></div></div>
				<br>
			</div><br>
		</section>
	</div>
	
	<?php include "footer.inc";?>
	
</body>
</html>