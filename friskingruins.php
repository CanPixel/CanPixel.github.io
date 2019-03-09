<?php
	include "styleswitch.inc";
	$main_page = "eigenwerk";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Frisking Ruins</title>
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
				<h2 style='margin-bottom:10px;background-color:#999; padding:15px;'><b>"Get slain by a giant death worm AND CRAFT!"</b></h2> <br>
				<div id='foto2'></div> <hr>
				
			<a class='download' id='anchor' href='#overview' style='display:inline-block;margin:10px;'>Overview<br><span style='font-size:11px;float:right;margin-top:5px;'>Overall info</span></a>
			<a class='download' id='anchor' href='#info' style='display:inline-block;margin:10px;'>Info<br><span style='font-size:11px;float:right;margin-top:5px;'>Technical</span></a>
			<a class='download' id='anchor' href='#controls' style='display:inline-block;margin:10px;'>Controls<br><span style='font-size:11px;float:right;margin-top:5px;'>Instructions</span></a>
			<a class='download' id='anchor' href='#play' style='display:inline-block;margin:10px;'>Play<br><span style='font-size:11px;float:right;margin-top:5px;'>Play the game!</span></a>
			<a class='download' id='anchor' href='#download' style='display:inline-block;margin:10px;'>Download<br><span style='font-size:11px;float:right;margin-top:5px;'>Download the game!</span></a>
			<br><hr>
				
				<div style="font-size:19px;width:65%;margin:auto;">
<div class="boxMove" style="width:350px;float:left;background-color:#444; padding:10px;margin-bottom:15px;"><i>"DEATH WORMS!"</i></div><br> <br>
<div class="boxMove" style="width:200px;float:right;background-color:#444; padding:10px;"><i>"It looks like minecraft"</i></div><br> <br>
<div class="boxMove2" style="width:220px; background-color:#444; padding:10px;"><i>Scavenge! Archeology woohoo!</i></div>
			</div><hr><br><br>
				
				<span class='titleCard'>Game Trailer:</span><br>
				<iframe style='margin:5px; border:solid 4px #888; border-radius:10px; box-shadow: 5px 5px 15px #222;' width='800' height='450' src='https://www.youtube.com/embed/7GolsRuCwL0' frameborder='0' allowfullscreen></iframe><br><br><br>
				
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="overview" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Overview</b> <br> <br>
<b>Frisking Ruins</b> is a procedural survival / bullet hell combining modern indie game elements with a nostalgic retro feel. 
<br><br>
You can kill NPCs, harvest items, go into dungeons, get slain by a giant death worm, and CRAFT!
<br><br>
	<br>
<b style="background-color:#666;padding:5px;">Main Mechanics</b>
<br><br>
<b>Procedural Map Generation</b><br>
The map is procedurally generated, in an overall desert environment. <br>
You are surrounded by walls of cacti, and it is your quest to trek through this barren desert, in search for dungeons. These dungeons are retro-themed bullet hell sequences, and act as a big challenge for the player, with their current loadout.
 <br><br>
<b>Crafting System & Inventory</b><br>
The inventory takes shape of the Toolbelt of the adventurous player.
Since the pacing of the game is centered around fast and quick, the UI and inventory is designed to convey a quick and easy-to-understand sense to the player. <br>
The player has about 4 inventory slots which are easily scrolled through with the Q and E buttons.
	<br>
	As of yet, you have these crafting recipes: <br>
- Cactus + Sword = Cactus Shank (Melee Item) <br>
- Cactus + Cloth = Bandage (Healing Item)
	
 <br><br>
Above this inventory there are four more slots. <br>
This is the seperated crafting inventory. By pressing the 1-4 buttons the player can combine two specific items to craft them into new items.
The Crafting system should work entirely by easy key presses with just the left hand. Like the inventory, it is designed for fast paced action. <br>
Once the player gets used to this control scheme, it allows for quick actions. <br>
Once you craft a new item, it gets placed in the first slot (from left to right) that’s empty in the player’s main inventory.
<br><br>
<br>
<b>Bullets, Monsters & Items</b><br>
The 3D world is littered with procedurally generated 2D tiled dungeons. 
Once the player enters said dungeon(s), monsters will spawn and a bullet hell sequence will begin.
This is either: <br>
- Tetris-like themed dungeon, where you avoid tetris shaped tiles that come from the top to the bottom of the chamber. <br>
- Game of Life recreation within the dungeon, where you have to avoid all living things, that keep evolving and creating other shapes. <br>
The combat works with items. Specific items have different stats such as: Knockback, Range, Damage, Attack Speed and Cooldown. Space (Action button) is used for overall combat.
 <br><br>
As of yet there are three enemies/entities: <br>
<b>The Mummy </b><br>
<b>The Aztec Relic</b><br>
<b>The Death Worm</b><br>
 <br><br>
<i style='font-size:18px;'>A vast, barren survival-bullet hell experience for one player.</i><br> <br>
<b>For all ages</b></p> <br>

<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Info</b> <br> <br>
The entire game is made in the <a href="https://unity3d.com/" target="_blank" class="link">Unity</a> engine. <br>
  <br>The concept, all the mechanics, sounds, music, art/visuals and design choices were made by me. <br>
<br>
	
<b>I have created some dynamic sub-systems using the following design patterns:</b> <br> <br>
<span style="font-size:15px;">
- Items inherit from ScriptableObject,which allows for the item info to exist in meta file format. All Item files in the ‘Resources’ folder is loaded automatically and put in the game. This way it is very easy to add new items into the game.<br><br>
- Crafting Recipes use the same principle.<br><br>
- Object Pool Pattern is used for the cacti and all the (custom) particles within the game. Since these objects come in high quantities, it reduces framerate issues and lag by putting these objects in pools.<br><br>
- Entities (Cactus, DeathWorm, Mummy, Aztec & Player) all inherit from an abstract Entity class, which handles their most basic behavior (such as Die(), Health management, movement, animation)<br><br>
- SoundManager handles all the Audio, such as Music transitions between the Dungeon and the Desert overworld. Also handles all the sounds in the game through static methods. Everything is done within this singleton file, which makes it kind of a Facade Pattern.<br><br>
- Inventory & Crafting this whole system is sort of a unified interface, that is divided into subsystems (Crafting class within the Inventory script, which then has CraftingSlot instances, all handled separately). The Inventory class has the most important public functions in order to control behavior. Therefore, it is a Composite pattern.<br><br>
- Dungeons (exist as a subclass within the World script) are constantly communicating back and forth with the World instance, to notify any changes/interactions with the player, entities or stats. Also, the world is observing these changes per Dungeon instance. So this is an observer pattern.</span><br>
<br>
	<b>Extra:</b><br>
- The Cacti  object pool uses Frustum Culling, to check which objects need to be updated and which ones don’t, this greatly improves performance.<br>

	<br>
	<br>
	
	<b>UML Diagram:</b> <br>
	<a href='images/FriskingRuins_UML.png' target='_blank'><img class='LIimage' src='images/AnyWalker_UML.png' width='94%' height='920' /></a>
	
<br> </p> <br>
	
<p style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="info" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Design</b> <br> <br>

<object data='pdf/FriskingRuins.pdf' width='600' height='860'></object><br><br>
 
</p> <br>

<div style="width:800px; text-align:left; margin:auto; background-color:#999; padding:15px; color:#222; font-size:17px;">
<span id="controls" class="anchorOffs"></span>
<b style="font-size:20px; background-color:#777; padding:5px;">Controls</b> <br> <br> 

<table id="control" style="clear:both; width:300px;">
					<tr>
						<th>Key</th> 
						<th>Action</th>
  					</tr>

					<tr> 
						<td> W A S D </td> 
						<td> Move around </td> 
					</tr>
					
					<tr>
						<td> Space </td>
						<td> Use Item / Action</td>
					</tr>

					<tr>
						<td> L Shift </td>
						<td> Pickup Item</td>
					</tr>
					
					<tr>
						<td> R Shift </td>
						<td> Drop Item</td>
					</tr>
					
					<tr>
						<td> 1,2,3,4 </td>
						<td> Select Crafting Slots 1-4</td>
					</tr>
					
					<tr>
						<td> Q & E </td>
						<td> Cycle Inventory Slot</td>
					</tr>
				</table>
<br> </div>
<br>

<br> <hr> <br>
				
				<div id='fotos'></div>
				
				<script>
				var style = document.getElementById("fotos");
				var html = "<style>.LIobject{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; position:relative; display:inline-block; opacity:1;} \
.LIimage{filter: contrast(75%) saturate(50%); opacity: 1; border:solid 4px #666; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; padding:2px; margin:5px 10px;}\
.LIimageBIG{border: solid 12px black; filter: contrast(70%) saturate(96%); opacity: 1; transition: all 0.4s ease, height 0.6s ease; -webkit-transition: all 0.4s ease, height 0.6s ease; position:fixed; width: 85%; height:95%; top: 0; bottom: 0; left: 0; right: 0; margin:auto; z-index:19;}\
.LIobjectBIG:hover{cursor:zoom-out; opacity:1;}\
.LIobjectBIG{transition: opacity 0.4s ease; -webkit-transition: opacity 0.4s ease; z-index: 18; opacity: 0.8; border:none; width:100%; top: 0; bottom: 0; left: 0; right: 0; height:100%; position:fixed; background-color:rgba(0, 0, 0, 0.8);}\
.LIimageBIG:hover{opacity:1;}\
.LIimage:hover{transition: filter 0.4s ease; -webkit-transition: filter 0.4s ease; filter: contrast(90%) saturate(90%); border:solid 6px #444;} .LIobject:hover{cursor:zoom-in; border:solid 6px #555;}.LIobject:hover .LIoverlay{height: 20%; border:solid 6px #555;} .LIoverlay{border:none; position:absolute; bottom: 8px; left: 0; right: 0; background-color:#666; opacity:0.95; overflow:hidden; width: 94%; margin:auto; height: 0; transition: .5s ease; -webkit-transition: .5s ease;} .LIOverlaytext{white-space: nowrap; position: absolute; overflow:hidden; top: 50%; left: 50%; transform: translate(-50%, -50%);} .LIOverlaytext h4 {font-size:16px;}\
				</style>";
				
				html += "\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/Frisk (1).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Retro dungeons = Bullet Hell!</h4></div></div></div>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/Frisk (2).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Enemies & Health</h4></div></div></div> <br> <br>\
				<div class='LIobject' onclick='openIMG(this)'><img class='LIimage' src='images/Frisk (3).jpg' width='300'/><div class='LIoverlay'><div class='LIOverlaytext'><h4>Craftable items</h4></div></div></div> <br> <br> ";
				
				style.innerHTML += html;
				
				document.getElementById("foto2").innerHTML += "<div><img class='LIimage' src='images/FRBanner.png' height='210'/></div>";
				</script>
				
				<hr>
				
				<br> 
				<span id="play" class="anchorOffs"></span>
				<div style="border: solid 6px #555; background-color:#515151;color:#CCC;"><br>
				<div style="height:650px;">
					</div><br>
				
				<section style="background-color:#666; height:100%;"> <br>
				<b><i style="font-size:18px;">Controls:</i></b> <br>
				
				<table id="controls" style="font-size:14px; width:250px; border:none; margin:auto; margin-top:10px; margin-bottom: 10px; background-color:#515151;">
					<tr>
						<th style="text-align:right;">Movement:</th> <th>W A S D</th>
					</tr>
					<tr>
						<th style="text-align:right;">Use Item(s):</th> <th>Space</th>
					</tr>
					<tr>
						<th style="text-align:right;">Navigate Crafting:</th> <th>1 2 3 4</th>
					</tr>
				</table>
				
				<br>
				<br> <br>
				</section>
				</div><br>
				
				<h2 style="color:black;">GitHub Source & Build</h2>
				
				<a style='margin-bottom:10px;' href='https://github.com/PhuckYuToo/KernModule/tree/master/Eindopdracht%20Retro/Frisking%20Ruins' target='_blank'><div class='download' style='width:400px;height:25px;margin:auto;'>Github Link (Source Project)</div></a><br>
				
				<script>
					var acc = document.getElementsByClassName("log");
					var i;

					for (i = 0; i < acc.length; i++) {
						acc[i].onclick = function(){
							/* Toggle between adding and removing the "active" class,
							to highlight the button that controls the panel */
							this.classList.toggle("active");

							/* Toggle between hiding and showing the active panel */
							var panel = this.nextElementSibling;
							if (panel.style.display === "block") {
								panel.style.display = "none";
							} else {
								panel.style.display = "block";
							}
						}
					}
				</script>
				
				<style>
					.boxMove {
						transition-delay: 0.4s;
						transition: transform 0.4s ease, margin-top 0.4s ease, margin-bottom 0.4s ease;
						transform: rotate(0deg) scale(1);
						margin-top: 5px;
						margin-bottom: 10px;
					}
					
					.boxMove:hover {
						transform: rotate(6deg) scale(1.2);
						margin-top: 15px;
						margin-bottom: 25px;
					}
					.boxMove2 {
						transition-delay: 0.4s;
						transition: transform 0.4s ease, margin-top 0.4s ease;
						transform: rotate(0deg) scale(1);
						margin:auto;
						margin-top:40px;
						clear:both;
					}
					
					.boxMove2:hover {
						transform: rotate(-4deg) scale(1.2);
						margin-top:55px;
					}
					
					#controls th
					{
						border-right: solid 2px #8B8B8B;
						border-bottom: solid 2px #8B8B8B;
						padding: 2px;
					}
					
					i.log {
						cursor: pointer;
						padding: 18px;
						width: 100%;
						text-align: left;
						border: none;
						outline: none;
						transition: 0.4s;
					}
					
					i.log.active, i.log:hover {
						color: #444;
						background-color: #ddd;
						border-radius:2px;
					}
					
					div.panel {
						margin:auto;
						margin-top:19px;
						padding: 0px 10px;
						width: 500px;
						background-color: #515151;
						display: none;
						text-align:left;
						border-right: solid 2px #8B8B8B;
						border-bottom: solid 2px #8B8B8B;
					}
					
					#download {
						border-radius:2px; padding:15px; background-color:#EEEEEE;
					}
					
					#download:hover {
						background-color:#FFF;
						cursor:pointer;
					}
				</style>
				
				<br><br>
				</div><br></div><br></div>
				
				<br><hr><br><a href='#top'><div class='download' style='width:200px; margin:auto;'>&uarr; To top &uarr;</div></a></div><br>
		</section>
	</div>
	<?php include "footer.inc"; ?>
</body>
</html>
