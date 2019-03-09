 <ul class='slideshow'>
  <li>
    <span></span>
  </li>
  <li>
    <span></span>
  </li>
  <li>
    <span></span>
  </li>
  <li>
    <span></span>
  </li>
    <li>
    <span></span>
  </li>
    <li>
    <span></span>
  </li>
    <li>
    <span></span>
  </li>
</ul>

<div id="sideA">	
		<nav>
			<ul>
				<a href="index.php?style=<?php echo $style ?>"><li <?php if(strcmp($main_page, "index") == 0) echo "id='chosen'";?>>Home</li></a>
				<a href="aboutMe.php?style=<?php echo $style ?>"><li <?php if(strcmp($main_page, "aboutme") == 0) echo "id='chosen'";?>>About Me</li></a>
				<a href="eigenWerk.php?style=<?php echo $style ?>"><li <?php if(strcmp($main_page, "eigenwerk") == 0) echo "id='chosen'";?>>Projects</li></a>
				<a href="school.php?style=<?php echo $style ?>"><li <?php if(strcmp($main_page, "school") == 0) echo "id='chosen'";?>>School</li></a>
				
			</ul>
		</nav>
		
		<section id="socialMedia" style='height:40px;width:105px;'>
		<span id="socialLinks" style="margin:auto;margin-top:0;margin-bottom:0;margin-right:7px;"> 
			<a target="_blank" class="social" href="https://www.instagram.com/cannemen/"><img style="width:40px;" src="images/instagram.png" /> </a>

			<a target="_blank" class="social" href="https://www.facebook.com/canurski"><img style="width:42px; border-radius:15px;" src="images/facebook.png" /> </a>
		</span>
			
			<script>
			var socialTag = jQuery('#socialMedia');
				
			jQuery(window).scroll(function(event){
				var maxScroll = document.getElementById("socialMedia").scrollHeight;
				var fromTop = jQuery(window).scrollTop();
				var scroll = fromTop / maxScroll * 20;
				
				socialTag.css("margin-top", scroll);
			});
			</script>
		</section>
	</div>