	<hr> <h1 style="margin:auto; font-size:30px;">Schoolyear</h1>
	<ul id="schoolMenu" style="width:80%; margin:auto; margin-top:15px;">
		<a href="school.php?style=<?php echo $style ?>" style='color:black; display:inline-block; margin-left:-60px;'><li id="topLeftSchool" <?php if(strcmp($year, '1') == 0) echo "style='background-color:white;'"?>>Year 1</li></a>
		<a href="school2.php?style=<?php echo $style ?>" style='color:black; display:inline-block; margin-left:-10px;'><li id="topLeftSchool" <?php if(strcmp($year, '2') == 0) echo "style='background-color:white;'"?>>Year 2</li></a>
	</ul><br>