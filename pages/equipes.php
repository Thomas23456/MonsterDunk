﻿<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
	<head>
		<title>Monster Dunk</title>
		<link rel="icon" type="images/png" href="images/basketball.png" title="basketball flaticon"/>
		<link rel="stylesheet" type="text/css" href="../css/commun.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	</head>

<body>
	<nav>
		<ul>
			<li><a href=""><img src="../images/monsterDunkLogo5.png" alt="Image logo Monster Dunk" class="logo effect"/></a></li><!--
			--><li><a href="" class="textMenu">News</a></li><!--
			--><li><a href="" class="textMenu">Equipes</a></li><!--
			--><li><a href="" class="textMenu">Matchs</a></li><!--
			--><li><a href="" class="textMenu bord">Résultats</a></li><!--
			--><li>
				<ul>
					<li><a href="" class="logos"><img src="../images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a></li><!--
					--><li><a href="" class="logos"><img src="../images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a></li><!--
					--><li><a href="" class="logos"><img src="../images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a></li><!--
					--><li><a href="" class="logos"><img src="../images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<br/><div class="containerEquipePrincipal"><div><br/>
	
	<?php
	
		require('../php/equipesData.php');
	
	?>
	
	<br/><br/></div></div>
	
	<br/>

	<footer>
		<table>
			<tr>
				<td class="legendFooter"><div id="borderLeftFooter"><a href="">A propos</a></div><div><a href="">Conditions d'utilisation</a></div><div><a href="">Contact</a></div></td>
			</tr>
			<tr>
				<td><a href=""><img src="../images/monsterDunkLogo5.png" alt="Image logo Monster Dunk" class="logo effect"/></a></td>
			</tr>
			<tr>
				<td><div class="droits">@Copyright 2020 Monster Dunk. Tous droits réservés.</div></td>
			</tr>
			<tr>
				<td>
					<a href=""><img src="../images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
					<a href=""><img src="../images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
					<a href=""><img src="../images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
					<a href=""><img src="../images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
				</td>
			</tr>
		</table>
	</footer>
</body>
</html>