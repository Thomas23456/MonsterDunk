<!DOCTYPE html>
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
	<div class="conteneurLogo">
			<a href="../index.html"><img src="../images/logo6.png" alt="Image logo Monster Dunk" class="logo effect"/></a>
		</div>
		<div class="conteneurReseaux">
			<a href="" class="logos"><img src="../images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
			<a href="" class="logos"><img src="../images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
			<a href="" class="logos"><img src="../images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
			<a href="" class="logos"><img src="../images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
	</div>
	<nav>
		<ul>
			<li><a href="" class="textMenu">News</a></li><!--
			--><li><a href="../pages/equipes.php" class="textMenu">Equipes</a></li><!--
			--><li><a href="" class="textMenu">Matchs</a></li><!--
			--><li><a href="../pages/resultat.php" class="textMenu bord">Résultats</a></li>
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