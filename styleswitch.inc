<?php
	if(empty($_GET['style'])) 
	{
		if(!isset($_COOKIE['style'])) $style = '2';
		else $style = $_COOKIE['style'];
	}
	else 
	{
		if(filter_var($_GET['style'], FILTER_VALIDATE_INT)) 
		{
		   if($_GET['style'] <= 2 && $_GET['style'] > 0)
		   {
				$style = $_GET['style'];
				setcookie("style", $style, time() + (86400 * 15), "/");
		   }
		   else header("location: index.php?style=2");
		}
		else 
		{
			if(strcmp($_GET['style'], 'justinbieber') == 0) header("location: http://i0.kym-cdn.com/photos/images/original/000/371/186/2b3.jpg");
			elseif(strcmp($_GET['style'], 'vildhjarta') == 0 || strcmp($_GET['style'], 'meshuggah') == 0) header("location: https://static2.fjcdn.com/comments/Meshuggah+_35a89a4d363d976791052a9a7b51494e.jpg");
			else header("location: index.php?style=2");
		}
	}
?>


<html>
	<head>
		<link rel="stylesheet" href="style<?php echo $style ?>.css" />
	</head>
</html>