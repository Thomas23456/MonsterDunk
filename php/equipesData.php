
<?php

//partie objet, pour aller chercher les infos par page
$chemin = '../docs/login.ini';

$db_params = parse_ini_file($chemin, true); //load le fichier.ini pour chercher les infos nécéssaires

try{
	$cnx = new PDO($db_params['db']['url'], $db_params['db']['user'], $db_params['db']['pass']);
}catch(Exception $e){ //exception
	print($e->getMessage()); //afficher message
	exit;
}

$titre1 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Atlantic<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre1);

//requête à exécuter
$RQTEquipes1 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Atlantic' ORDER BY eq.nom";

$RQTExecEquipes1 = $cnx->prepare($RQTEquipes1);
$RQTExecEquipes1->execute();

$affichEquipes1 = ''; //la variable à remplir
$cpt = 0;

while($ligne1 = $RQTExecEquipes1->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes1 = $affichEquipes1.'<a href="detailsEquipe.php?id='.$ligne1['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne1['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne1['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne1['pays'].' - '.$ligne1['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne1['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne1['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne1['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne1['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne1['date_debut'].' - '.$ligne1['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne1['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne1['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes1); //on affiche le résultat

$titre2 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Central<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre2);

//requête à exécuter
$RQTEquipes2 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Central' ORDER BY eq.nom";

$RQTExecEquipes2 = $cnx->prepare($RQTEquipes2);
$RQTExecEquipes2->execute();

$affichEquipes2 = ''; //la variable à remplir

while($ligne2 = $RQTExecEquipes2->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes2 = $affichEquipes2.'<a href="detailsEquipe.php?id='.$ligne2['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne2['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne2['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne2['pays'].' - '.$ligne2['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne2['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne2['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne2['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne2['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne2['date_debut'].' - '.$ligne2['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne2['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne2['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes2); //on affiche le résultat

$titre3 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Southeast<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre3);

//requête à exécuter
$RQTEquipes3 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Southeast' ORDER BY eq.nom";

$RQTExecEquipes3 = $cnx->prepare($RQTEquipes3);
$RQTExecEquipes3->execute();

$affichEquipes3 = ''; //la variable à remplir

while($ligne3 = $RQTExecEquipes3->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes3 = $affichEquipes3.'<a href="detailsEquipe.php?id='.$ligne3['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne3['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne3['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne3['pays'].' - '.$ligne3['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne3['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne3['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne3['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne3['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne3['date_debut'].' - '.$ligne3['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne3['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne3['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes3); //on affiche le résultat

$titre4 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Pacific<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre4);

//requête à exécuter
$RQTEquipes4 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Pacific' ORDER BY eq.nom";

$RQTExecEquipes4 = $cnx->prepare($RQTEquipes4);
$RQTExecEquipes4->execute();

$affichEquipes4 = ''; //la variable à remplir

while($ligne4 = $RQTExecEquipes4->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes4 = $affichEquipes4.'<a href="detailsEquipe.php?id='.$ligne4['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne4['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne4['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne4['pays'].' - '.$ligne4['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne4['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne4['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne4['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne4['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne4['date_debut'].' - '.$ligne4['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne4['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne4['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes4); //on affiche le résultat

$titre5 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Southwest<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre5);

//requête à exécuter
$RQTEquipes5 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Southwest' ORDER BY eq.nom";

$RQTExecEquipes5 = $cnx->prepare($RQTEquipes5);
$RQTExecEquipes5->execute();

$affichEquipes5 = ''; //la variable à remplir

while($ligne5 = $RQTExecEquipes5->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes5 = $affichEquipes5.'<a href="detailsEquipe.php?id='.$ligne5['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne5['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne5['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne5['pays'].' - '.$ligne5['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne5['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne5['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne5['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne5['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne5['date_debut'].' - '.$ligne5['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne5['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne5['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes5); //on affiche le résultat

$titre6 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Northwest<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre6);

//requête à exécuter
$RQTEquipes6 = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE divi.nom = 'Northwest' ORDER BY eq.nom";

$RQTExecEquipes6 = $cnx->prepare($RQTEquipes6);
$RQTExecEquipes6->execute();

$affichEquipes6 = ''; //la variable à remplir

while($ligne6 = $RQTExecEquipes6->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$cpt++;
	$affichEquipes6 = $affichEquipes6.'<a href="detailsEquipe.php?id='.$ligne6['id_equipe'].'&nb='.$cpt.'"><div class="containerEquipe colorBorderEquipe'.$cpt.'">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne6['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">'.$ligne6['libelle'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne6['pays'].' - '.$ligne6['nom'].'</div><div>Surnom :<div>&nbsp;'.$ligne6['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne6['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne6['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne6['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3 class="colorTitreEquipe'.$cpt.'">SAISON '.$ligne6['date_debut'].' - '.$ligne6['date_fin'].'</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne6['victoire'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne6['defaite'].'</div></div><br/><br/>
										</div>
									</div></a><br/>'; 
}

echo($affichEquipes6); //on affiche le résultat

?>