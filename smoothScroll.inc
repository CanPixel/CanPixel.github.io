<link rel="shortcut icon" href="favicon.ico">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
  $("a#anchor").on('click', function(event) 
  {
    if (this.hash !== "") 
	{
      event.preventDefault();
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function()
	  {
        window.location.hash = hash;
      });
    }
  });
});
</script>

<script>
	function openIMG(img) 
	{ 
		var imaging = img.childNodes[0];
		if(imaging != null)
		{
			if(img.className == "LIobject" || imaging.className == "LIimage" || img.className == "LiobjectHeight" || imaging.className == "LIimageHeight")
			{
				img.className = "LIobjectBIG";
				imaging.className = "LIimageBIG";
				img.style.top = img.width;
				$("div.LIobjectBIG").css("width", "100%");
				$("body").css("overflow", "hidden");

				if(img.childNodes[1] != null) img.childNodes[1].style.opacity = 0;
			}
			else closeIMG(img);
		}
	}
	
	function openIMGHeight(img) 
	{ 
		var imaging = img.childNodes[0];
		if(imaging != null)
		{
			if(img.className == "LiobjectHeight" || imaging.className == "LIimageHeight")
			{
				img.className = "LIobjectBIGHeight";
				imaging.className = "LIimageBIGHeight";
				img.style.top = img.width;
				$("div.LIobjectBIGHeight").css("width", "100%");
				$("body").css("overflow", "hidden");

				if(img.childNodes[1] != null) img.childNodes[1].style.opacity = 0;
			}
			else closeIMGHeight(img);
		}
	}

	function closeIMG(img)
	{
		var imaging = img.childNodes[0];
		if(imaging != null)
		{
			if(img.className == "LIobjectBIG" || imaging.className == "LIimageBIG")
			{
				img.className = "LIobject";
				imaging.className = "LIimage";
				$("div.LIobject").css("width", img.style.top);
				$("body").css("overflow", "auto");
				if(img.childNodes[1] != null) img.childNodes[1].style.opacity = 100;
			}
		}
	}
	
	function closeIMGHeight(img)
	{
		var imaging = img.childNodes[0];
		if(imaging != null)
		{
			if(img.className == "LiobjectBIGHeight" || imaging.className == "LIimageBIGHeight")
			{
				img.className = "LIobjectHeight";
				imaging.className = "LIimageHeight";
				$("div.LIobjectHeight").css("width", img.style.top);
				$("body").css("overflow", "auto");
				if(img.childNodes[1] != null) img.childNodes[1].style.opacity = 100;
			}
		}
	}
</script>