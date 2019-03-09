
<?php
	include "styleswitch.inc";
	$main_page = "contact";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<style>
		input[type=text], textarea {
			padding: 5px;
			border-radius: 5px;
			margin-bottom: 10px;
			background-color: #DDDDDD;
			color: black;
			border: none;
			border-bottom: solid 2px #999999;
			resize: none;
		}
		input[type=submit] {
			border-radius:3px;
			background-color: #DDDDDD;
		}
		input[type=text]:focus {
			border-bottom: solid 2px #000000;
		}
		input[type=text]:hover {
			border-bottom: solid 2px #666666;
		}
		input[type=text] {
			float: right;
			margin-left: -15px;
			margin-top: -1px;
		}
	</style>
	
	<div style="float:left; width:61%; height:auto; margin-left:12%;">
		<section class="content">
		<div style="margin:5px -5px 5px 15px; background-color:#8B8B8B; padding: 5px 5px;">
			<h2>Contact</h2>
			
			<p>
				Heb jij vragen, opmerkingen, frutsels, <i><strong style="color:#720001;">haatcommentaar</strong></i>? (vooral niet dat laatste eigenlijk) <br />
			</p> <br>
			
			
			<fieldset>
				<legend><h5>Stuur mij gerust een mailtje</h5></legend> <br>
				<h3 style="color:#333333; font-size:25px;">De mail is verzonden, bedankt!
			</fieldset>
			</div>
		</section>
	</div>
	
	<?php
		include "footer.inc";
	?>
</body>
</html>