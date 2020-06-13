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
		<a href="#"><img src="../images/logo6.png" alt="Image logo Monster Dunk" class="logo effect"/></a>
	</div>
	<div class="conteneurReseaux">
		<a href="" class="logos"><img src="../images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
		<a href="" class="logos"><img src="../images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
		<a href="" class="logos"><img src="../images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
		<a href="" class="logos"><img src="../images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
	</div>
	<nav>
		<ul>
			<li><a href="#" class="textMenu">News</a></li><!--
			--><li><a href="../pages/equipes.php" class="textMenu">Equipes</a></li><!--
			--><li><a href="../pages/match.php" class="textMenu">Matchs</a></li><!--
			--><li><a href="../pages/resultat.php" class="textMenu bord">Résultats</a></li>
		</ul>
	</nav>
	
	
	<br/><div class="containerNewsPrincipal"><div>
		<div class="ensembleNews"><br/><br/><br/>
	
	<?php
	
		require('../php/newsData.php');
	
	?>
	
	<br/><br/></div>
	
	<div class="ensembleEquipes">
		<br/><br/><h3>Atlantic</h3><br/>
		<img src="../images/clubs/celtics.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/brooklyn.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/knicks.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/philadelphia.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/raptors.png" alt="Logo équipe celtics"/><br/>
		
		<br/><h3>Central</h3><br/>
		<img src="../images/clubs/bulls.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/cavaliers.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/detroit.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/pacers.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/bucks.png" alt="Logo équipe celtics"/><br/>
		
		<br/><h3>Southeast</h3><br/>
		<img src="../images/clubs/atlanta.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/hornets.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/miami.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/orlando.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/washington.png" alt="Logo équipe celtics"/><br/>
		
		<br/><h3>Pacific</h3><br/>
		<img src="../images/clubs/warriors.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/clippers.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/lakers.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/suns.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/sacramento.png" alt="Logo équipe celtics"/><br/>
		
		<br/><h3>Southwest</h3><br/>
		<img src="../images/clubs/dallas.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/rockets.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/grizzlies.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/newOrleans.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/spurs.png" alt="Logo équipe celtics"/><br/>
		
		<br/><h3>Northwest</h3><br/>
		<img src="../images/clubs/denver.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/minnesota.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/thunder.png" alt="Logo équipe celtics"/>
		<img src="../images/clubs/portland.png" alt="Logo équipe celtics"/><br/>
		<img src="../images/clubs/jazz.png" alt="Logo équipe celtics"/><br/>
	</div>
	
	</div></div>
	
	<br/><br/>
	
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