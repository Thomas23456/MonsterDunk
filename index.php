﻿<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
	<head>
		<title>Monster Dunk</title>
		<link rel="icon" type="images/png" href="images/basketball.png" title="basketball flaticon"/>
		<link rel="stylesheet" type="text/css" href="css/commun.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="js/main.js"></script>
	</head>

<body>
		<div class="conteneurLogo">
			<a href="#"><img src="images/logo6.png" alt="Image logo Monster Dunk" class="logo effect"/></a>
		</div>
		<div class="conteneurReseaux">
			<a href="#" class="logos"><img src="images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
			<a href="#" class="logos"><img src="images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
			<a href="#" class="logos"><img src="images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
			<a href="#" class="logos"><img src="images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
		</div>
		<nav>
			<ul>
				<li><a href="pages/news.php" class="textMenu">News</a></li><!--
				--><li><a href="pages/equipes.php" class="textMenu">Equipes</a></li><!--
				--><li><a href="pages/match.php" class="textMenu">Matchs</a></li><!--
				--><li><a href="pages/resultat.php" class="textMenu bord">Résultats</a></li>
			</ul>
		</nav>
		
		<div class="containerGrid">
			<div class="grid">
				<div class="one">
					<img src="images/articles/article5.jpg" alt="Article principal"/>
					<span class="articleHover">Le dunk impressionant de Sergio</span>
				</div>
				<div class="two">
					<img src="images/articles/article1.jpg" alt="Article principal"/>
					<span class="articleHover">Lebron James chez les Lakers</span>
				</div>
				<div class="three">
					<img src="images/articles/article3.jpeg" alt="Article principal"/>
					<span class="articleHover">Curry VS James : Le duel</span>
				</div>
				<div class="four">
					<img src="images/articles/article2.jpg" alt="Article principal"/>
					<span class="articleHover">Les Mavericks de Dallas plus en forment que jamais</span>
				</div>
				<div class="five">
					<img src="images/articles/article4.jpg" alt="Article principal"/>
					<span class="articleHover">Le nouveau jeu far de la NBA</span>
				</div>
			</div>
		</div>
		<div id="conteneurAutreNews">
			<h3>Les dernières informations sur l'actualité</h3>

			<section class="carousel">
				<ul class="similaireContent">
					<li class="carousel-item">
						<div class="bienUniqueSimilaire">
							<div>
								<a href=""><img src="images/articles/article5.jpg" alt="Article 2"/><span class="spanBien">Aperçu</span></a>
								<div><br/><div>Article<br/><br/>
								Le dunk impressionant de Sergio<br/><br/>
								par TF1, il y a 3 heures.
								</div></div>
							</div>
							<div class="texteBien">Les dunks, une figure impressionnante, que seuls les plus doués maîtrisent à la perfection comme nous le montre si bien Sergio.</div>
						</div>
					</li>
					
					<li class="carousel-item">
						<div class="bienUniqueSimilaire">
							<div>
								<a href=""><img src="images/articles/article1.jpg" alt="Article 2"/><span class="spanBien">Aperçu</span></a>
								<div><br/><div>News<br/><br/>
								Lebron James chez les Lakers<br/><br/>
								par Cnews, il y a 5 heures.
								</div></div>
							</div>
							<div class="texteBien">Après de nombreuses saisons passées aux côtés des Cavaliers, Lebron James revient sur ses pas et remet le maillot des Lakers.</div>
						</div>
					</li>
					
					<li class="carousel-item">
						<div class="bienUniqueSimilaire">
							<div>
								<a href=""><img src="images/articles/article3.jpeg" alt="Article 2"/><span class="spanBien">Aperçu</span></a>
								<div><br/><div>Article<br/><br/>
								Curry VS James : Le duel<br/><br/>
								par BFM TV, il y a 8 heures.
								</div></div>
							</div>
							<div class="texteBien">Leurs combats tous plus rudes les uns que les autres, ne s'arrêteront-ils jamais ? Seul l'avenir nous le dira...</div>
						</div>
					</li>
				</ul>
				
				<div class="containPlus"><a href="pages/news.php" class="plus">Voir plus  &#10132;</a></div>
				
			</section><br/>
		</div>
		
	<div id="conteneurAll">
		<div id="conteneurTitre">
			<span class="premierTitre">Choisis ton</span>
			<span>équipe</span>
			<a class="plusEquipe" href="pages/equipes.php">Plus d'équipes ...</a>
		</div>
		<div id="conteneurChoix">
			<div class="conteneurChoixSelection">
					<div class="conteneurDivision">
						<div class="conteneurDivisionPoint conteneurLakers">
							<div class="divisionIcone">
								<img class="logoEquipe" src="images/clubs/lakers.png" alt="logo des Lakers">
								<span class="test"></span>
								<span class="logoTitre">Lakers</span>
							</div>
							<div class="trait"></div>
							<div class="pointIcone">
								<span class="point"></span>
							</div>
						</div>
						<div class="conteneurDivisionPoint conteneurRaptors">
							<div class="divisionIcone">
								<img class="logoEquipe" src="images/clubs/raptors.png" alt="logo des Lakers">
								<span class="logoTitre">Raptors</span>
							</div>
							<div class="trait"></div>
							<div class="pointIcone">
								<span class="point"></span>
							</div>
						</div>
						<div class="conteneurDivisionPoint conteneurCeltics">
							<div class="divisionIcone">
								<img class="logoEquipe" src="images/clubs/celtics.png" alt="logo des Lakers">
								<span class="logoTitre">Celtics</span>
							</div>
							<div class="trait"></div>
							<div class="pointIcone">
								<span class="point"></span>
							</div>
						</div>
						<div class="conteneurDivisionPoint conteneurBucks">
							<div class="divisionIcone">
								<img class="logoEquipe" src="images/clubs/bucks.png" alt="logo des Lakers">
								<span class="logoTitre">Bucks</span>
							</div>
							<div class="trait"></div>
							<div class="pointIcone">
								<span class="point"></span>
							</div>
						</div>
						<div class="conteneurDivisionPoint conteneurBulls">
							<div class="divisionIcone">
								<img class="logoEquipe" src="images/clubs/bulls.png" alt="logo des Lakers">
								<span class="logoTitre">Bulls</span>
							</div>
							<div class="trait"></div>
							<div class="pointIcone">
								<span class="point"></span>
							</div>
						</div>
					</div>
				<div class="videoDivision">
					<video class="videoGo" autoplay muted loop>
						<source class="sourceVideo" src="video/highlightLakers.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="conteneurChoixImage">
				<div class="cercleInfini"></div>
				<img class="imageJoueur" src="" alt="Choisis une équipe">
			</div>
		</div>     
	</div>
	<div id="conteneurJouerJeu">
		<div id="conteneurJouerJeuGauche">
			<img src="images/nba.png" alt="nba">
		</div>
		<div id="conteneurJouerJeuDroit">
			<span class="titreJouerJeu">Créez votre</span>
			<span class="titreJouerJeuMain">Équipe</span>
			<span class="textJouerJeu">Concevez votre propre Équipe en choisissant parmi les joueurs de la NBA !</span>
			<a class="boutonJouerJeu" href="pages/jeu.php">Jouer</a>
		</div>
	</div>

	<br/><br/><br/>
	
	<?php
	
	require("php/popup.php");
	
	?>

	<footer>
		<table>
			<tr>
				<td class="legendFooter"><div id="borderLeftFooter"><a href="#popup">A propos</a></div><div><a href="#popup2">Conditions d'utilisation</a></div><div><a href="#popup3">Contact</a></div></td>
			</tr>
			<tr>
				<td><a href=""><img src="images/monsterDunkLogo5.png" alt="Image logo Monster Dunk" class="logo effect"/></a></td>
			</tr>
			<tr>
				<td><div class="droits">@Copyright 2020 Monster Dunk. Tous droits réservés.</div></td>
			</tr>
			<tr>
				<td>
					<a href=""><img src="images/facebook.png" alt="Image logo facebook" class="reseaux effect"/></a>
					<a href=""><img src="images/instagram.png" alt="Image logo instagram" class="reseaux effect"/></a>
					<a href=""><img src="images/twitter.png" alt="Image logo twitter" class="reseaux effect"/></a>
					<a href=""><img src="images/youtube.png" alt="Image logo youtube" class="reseaux effect"/></a>
				</td>
			</tr>
		</table>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>