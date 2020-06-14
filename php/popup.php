
<?php

$popup = '<div class="bulleConnexion" id="popup">
			<div id="back" class="fond"></div>
			<form id="formConnexion" action="#" method="post" enctype="multipart/form-data">
				
				<a class="fermer" id="close" href="#">X</a>

				<h3 class="titre">A propos</h3><br/><br/>

				<div>Pour nous contacter, utilisez le formulaire qui se trouve ci-dessous<br/><br/>
				Nous sommes de jeunes entrepreneurs, A.Philipiert et T.Payan, étudiants à Ynov Campus situé à AIx-en-Provence.<br/><br/>
				Fans de basketball et de culture américaine, nous avons don cdécidé de rédiger ce fan blog sur le basket, comprenant les news, les équipes, les résultats, 
				les matchs et vous pouvez même composer votre propre équipe à travers d\'un petit jeu que nous avons mis en place ; c\'est donc pour cela que nous avons décidé
				de mettre en place ce site web nommé MonsterDunk.</div>
			</form>
		</div>
		
		<div class="bulleConnexion" id="popup2">
			<div id="back" class="fond"></div>
			<form id="formConnexion" action="#" method="post" enctype="multipart/form-data">
				
				<a class="fermer" id="close" href="#">X</a>

				<h3 class="titre">Conditions d\'utilisation</h3><br/><br/>

				<div>Les présentes conditiosn générales d\'utilisation (dites "CGU") ont pout objet l\'encradrement juridique des modalités de mise à disposition
				du site et des services par MonsterDunk et de définir les conditions d\'accès et d\'utilisation des services par "l\'utilisateur".<br/><br/>
				L\'édition du site MonsterDunk est assurée par la Société MonsterDunk Company.<br/><br/>
				Numéro de téléphone +33 7 25 ** ** **<br/>
				Adresse e-mail : monsterdunkcompany@gmail.com.</div>
			</form>
		</div>
		
		<div class="bulleConnexion" id="popup3">
			<div id="back" class="fond"></div>
			<form id="formConnexion" action="#" method="post" enctype="multipart/form-data">
				
				<a class="fermer" id="close" href="#">X</a>

				<h3 class="titre">Contact</h3><br/><br/>

				<table class="tablePopup">
					<tr>
						<td class="popupColonne1">
							<label for="nom">Votre nom* : </label><br/><br/>
							
							<label for="prénom">Votre prénom* : </label><br/><br/>

							<label for="email">Votre mail* : </label><br/><br/>
						</td>
						<td class="popupColonne2">
							<input type="text" name="nom" id="nom" placeholder="Votre nom"/><br/><br/>
							<input type="text" name="prenom" id="prenom" placeholder="Votre prénom"/><br/><br/>
							<input type="mail" name="email" id="email" placeholder="Votre email"/><br/><br/>
						</td>
						<td class="popupColonne3">
							<label for="email">Votre message* : </label><br/><br/>
							<textarea name="message" id="message"/>Votre message</textarea><br/><br/>
						</td>
					</tr>
				</table>
				<div class="obligatoire">(*)Champs obligatoires</div>

				<br/><div id="boutons"><input type="reset" id="resetConnexion" name="resetConnexion" value="Reset"/>
				<input type="submit" id="envoyer" name="envoyer" value="Envoyer"/></div>
			</form>
		</div>';

echo($popup);

?>