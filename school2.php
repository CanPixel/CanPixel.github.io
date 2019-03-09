<?php
	include "styleswitch.inc";
	$page = "school2";
	$main_page = "school2";
	$year = 2;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Year 2</title>
<?php include "smoothScroll.inc"; ?>
</head>

<body>
	<?php
	include "header.inc";
	include "menu.inc";
	?>
	
	<div style="float:left; max-width:75%; height:auto; margin-left:2.5%;">
		<section class="content">
			<div style="margin:5px -5px -5px 15px; background-color:#9F9F9F; padding: 5px 15px;">
			<?php include "schoolMenu2.inc";?>
			<h2 id='title'><script>document.getElementById("title").innerHTML = document.title;</script></h2>
			</div>
		</section>
		</div>
	<?php include "footer.inc"; ?>
</body>
</html>