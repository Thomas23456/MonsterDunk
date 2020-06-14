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
		<a href="../index.php"><img src="../images/logo6.png" alt="Image logo Monster Dunk" class="logo effect"/></a>
	</div>
	<div class="conteneurReseaux">
		<a href="#" class="logos"><img src="../images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
		<a href="#" class="logos"><img src="../images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
		<a href="#" class="logos"><img src="../images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
		<a href="#" class="logos"><img src="../images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
	</div>
	<nav>
		<ul>
			<li><a href="../pages/news.php" class="textMenu">News</a></li><!--
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
		<a href="detailsEquipe.php?id=2&nb=1"><img src="../images/clubs/celtics.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=3&nb=2"><img src="../images/clubs/brooklyn.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=11&nb=3"><img src="../images/clubs/knicks.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=13&nb=4"><img src="../images/clubs/philadelphia.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=14&nb=5"><img src="../images/clubs/raptors.png" alt="Logo équipe celtics"/><br/></a>
		
		<br/><h3>Central</h3><br/>
		<a href="detailsEquipe.php?id=5&nb=6"><img src="../images/clubs/bulls.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=6&nb=7"><img src="../images/clubs/cavaliers.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=7&nb=8"><img src="../images/clubs/detroit.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=8&nb=9"><img src="../images/clubs/pacers.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=10&nb=10"><img src="../images/clubs/bucks.png" alt="Logo équipe celtics"/><br/></a>
		
		<br/><h3>Southeast</h3><br/>
		<a href="detailsEquipe.php?id=1&nb=11"><img src="../images/clubs/atlanta.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=4&nb=12"><img src="../images/clubs/hornets.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=9&nb=13"><img src="../images/clubs/miami.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=12&nb=14"><img src="../images/clubs/orlando.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=15&nb=15"><img src="../images/clubs/washington.png" alt="Logo équipe celtics"/><br/></a>
		
		<br/><h3>Pacific</h3><br/>
		<a href="detailsEquipe.php?id=18&nb=16"><img src="../images/clubs/warriors.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=20&nb=17"><img src="../images/clubs/clippers.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=21&nb=18"><img src="../images/clubs/lakers.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=26&nb=19"><img src="../images/clubs/suns.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=28&nb=20"><img src="../images/clubs/sacramento.png" alt="Logo équipe celtics"/><br/></a>
		
		<br/><h3>Southwest</h3><br/>
		<a href="detailsEquipe.php?id=16&nb=21"><img src="../images/clubs/dallas.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=19&nb=22"><img src="../images/clubs/rockets.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=22&nb=23"><img src="../images/clubs/grizzlies.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=24&nb=24"><img src="../images/clubs/newOrleans.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=29&nb=25"><img src="../images/clubs/spurs.png" alt="Logo équipe celtics"/><br/></a>
		
		<br/><h3>Northwest</h3><br/>
		<a href="detailsEquipe.php?id=17&nb=26"><img src="../images/clubs/denver.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=23&nb=27"><img src="../images/clubs/minnesota.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=25&nb=28"><img src="../images/clubs/thunder.png" alt="Logo équipe celtics"/></a>
		<a href="detailsEquipe.php?id=27&nb=29"><img src="../images/clubs/portland.png" alt="Logo équipe celtics"/><br/></a>
		<a href="detailsEquipe.php?id=30&nb=30"><img src="../images/clubs/jazz.png" alt="Logo équipe celtics"/><br/></a>
	</div>
	
	</div></div>
	
	<br/><br/>
	
	<?php
	
	require("../php/popup.php");
	
	?>

	<footer>
		<table>
			<tr>
				<td class="legendFooter"><div id="borderLeftFooter"><a href="#popup">A propos</a></div><div><a href="#popup2">Conditions d'utilisation</a></div><div><a href="#popup3">Contact</a></div></td>
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