<?php
	include "styleswitch.inc";
	$main_page = "aboutme";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Me</title>

<meta property="og:url"         content="https://www.facebook.com/nemsisband/" />
<meta property="og:type"        content="website" />
<meta property="og:title"       content="Can Ur" />
<meta property="og:description" content="Portfolio van Can Ur" />
<meta property="og:image"       content="Can.jpg" />
<?php include "smoothScroll.inc"; ?>
</head>

<body>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id)
		{
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=248972122282946";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>

	<?php
		include "header.inc";
		include "menu.inc";
	?>
	
	<div style="float:left; max-width:75.8%; height:auto; margin-left:2%;">
		<section class="content">
			<div style="margin:10px -5px -22px 15px; background-color:#9F9F9F;"> <br>
				<h2>About Me</h2>

			<div style='width:90%; margin:auto; background-color:#888;'><br>
			<div style='width:80%; margin:auto;'>
				<img style="width:400px; float:left; margin:120px 30px 20px 15px; border:solid 8px #AAAAAA; border-radius:2px; overflow:auto;" src="images/Cangig.jpg" /> <br> <br>

				<p> <b style="font-size:26px; text-align:center; margin:auto;float:left;margin-top:20px;">Can Ur</b> </p>

				<p style="background-color:#999; padding:50px; color:#222; text-align:left; margin:auto;">
					<br>
					I've taught myself Java around the age of 13. I initially began with creating mods for Minecraft.
					After this I fairly quickly made a switch to Game Programming, and creating of my own. This started as a 2D engine in LWJGL (Lightweight Java Game Library). After some more experiments, time brings me here. And now I'm working on a lot of interesting projects in C++, C, HTML, PICO-8/LUA, Construct 2 and especially Unity/C#.
					<br> <br>
					Aside from Game Development/Design, I love making music, and I play in a band called <a target="_blank" class="link" href="https://www.youtube.com/channel/UC4VriLM8B6HNPTZ8ux1lQOg">NEMSIS</a>. <br>
					I won the Rob Acda Awards 2017/2018 with my band. (A musical competition where bands play against eachother)
					Because we won this, we opened on the mainstage of the Bevrijdingspop festival in 2018 located in Haarlem, The Netherlands. This was one of my greatest experiences.<br> <br>
					
					Besides playing in NEMSIS, I also make instrumental MIDI songs for projects. <br> <br>
					Check <a href='eigenWerk.php#midi' class='link'>my MIDI tracks</a>
					<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
					
					<div style='background-color:#777; margin:auto; text-align:left;'>
					<b>Links:</b><br>
					<div style='text-align:right;'>
					<a class="link" style="margin-right:10px;" target="_blank" href="https://www.facebook.com/nemsisband/"><img style="width:30px;margin: auto;" src="facebook.png"/></a>

					<a class="link" style="margin-right:10px;" target="_blank" href="https://www.youtube.com/channel/UC4VriLM8B6HNPTZ8ux1lQOg/"><img style="width:30px;margin: auto;" src="youtube.png"/></a>
					
					<a class="link" style="margin-right:10px;" target="_blank" href="https://open.spotify.com/artist/3MPnL7QqlX6t93o5fSme1y?si=zkODMBbKTP6VxRoZfzNoOQ"><img style="width:30px;margin: auto;" src="spotify.png"/></a>
					
					<a class="link" style="margin-right:10px;" target="_blank" href="https://www.instagram.com/nemsisband/"><img style="width:30px;margin: auto;" src="instagram.png"/></a> </div></div>
					<br> <br>

				<div style='text-align:left;'>
					<!-- Het is een iframe, ik weet dat ik dit moet vermijden maar het is voor één youtube filmpje -->
					<span class='titleCard'>Voorronde Rob Acda Awards (2017/2018):</span><br>
					<iframe width="60%" height="400px;" src="https://www.youtube.com/embed/QmQK-adbKPA" frameborder="0" allowfullscreen></iframe> <br> <br>
					
					<iframe src="https://open.spotify.com/embed?uri=spotify:artist:3MPnL7QqlX6t93o5fSme1y" width="300" height="400" frameborder="0" allowtransparency="true" allow="encrypted-media" style='float:right; margin-top:20px;'></iframe>
					
					<span class='titleCard'>Bevrijdingspop Haarlem 2018 Aftermovie:</span><br>
					<iframe width="60%" height="400px;" src="https://www.youtube.com/embed/xCP6mWn9FUI" frameborder="0" allowfullscreen></iframe> <br> <br>
					
					<div class="fb-like" data-href="https://www.facebook.com/nemsisband/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					<br></div>
				</p>
				
				<br><hr><br>
				
				<p>
					<h3><i>My favorite game(s)?</i></h3>
				</p>
				<p style="background-color:#999; padding:15px; color:#222; text-align:left; margin:auto;">
					<b><i>There is enough to blabber about, but here are a few: </i></b><br><br>

					<b>Shadow of the Collossus:</b> It fascinates me how this game works with the scaling. The contrast between gi-normous and eenie-meenie-little-bitty tiny. Also, how this game achieves the mechanic of climbing onto huge entities, that all have their own "brain". Amazing. <br> <br>
					
					<b>The Escapists:</b> A fun top-down 2D game, where you have to figure out ways of escaping prison. How the A.I works intrigues me. And also leaving the player up to his own ideas, is great in my opinion. There are multiple ways of escaping. <br> <br>

					<b>Silent Hill 1 & 2:</b> Breathtaking psychological horror, with one of THE best atmospheres. The pure existance of this thing called terror, manifesting within you. The game achieves this without jumpscares, f*cking b*llocks. <br> <br>
					
					<b>Team Fortress 2:</b> Awesome art style, fun competitive gameplay, a vast variety of items and wearables, good teamwork pays off quite nicely and there are multiple gamemodes. Also, it's free. I kinda miss this game. <br> <br>
				</p>
				<br>
				<p style="background-color:#999; padding:15px; color:#222; text-align:left; margin:auto;">
					<b><i>Favorite gadget(s):</i></b> <br> <br>
					<b>The Nintendo (3)DS: </b> Small portable console, with 3D graphics and a touchscreen, and it's not an ordinary basic smartphone. I find that quite nice.
				</p>
				
				<br>
				
				<!--<a href="pdf/cv.pdf" style="font-size: 26px;" target="_blank">
				<p style="background-color:#999; padding:15px; color:#222; text-align:center; width:115px; height:30px; margin:auto;">
					Mijn CV
				</p></a>-->
			</div> <br>
			</div><br></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
