
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
$RQTEquipes1 = "SELECT * FROM equipe WHERE region = 'Atlantic' ORDER BY nom";

$RQTExecEquipes1 = $cnx->prepare($RQTEquipes1);
$RQTExecEquipes1->execute();

$affichEquipes1 = ''; //la variable à remplir

while($ligne1 = $RQTExecEquipes1->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes1 = $affichEquipes1.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne1['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne1['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne1['position'].' - '.$ligne1['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne1['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne1['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne1['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne1['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne1['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne1['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes1); //on affiche le résultat

$titre2 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Central<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre2);

//requête à exécuter
$RQTEquipes2 = "SELECT * FROM equipe WHERE region = 'Central' ORDER BY nom";

$RQTExecEquipes2 = $cnx->prepare($RQTEquipes2);
$RQTExecEquipes2->execute();

$affichEquipes2 = ''; //la variable à remplir

while($ligne2 = $RQTExecEquipes2->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes2 = $affichEquipes2.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne2['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne2['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne2['position'].' - '.$ligne2['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne2['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne2['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne2['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne2['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne2['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne2['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes2); //on affiche le résultat

$titre3 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Southeast<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre3);

//requête à exécuter
$RQTEquipes3 = "SELECT * FROM equipe WHERE region = 'Southeast' ORDER BY nom";

$RQTExecEquipes3 = $cnx->prepare($RQTEquipes3);
$RQTExecEquipes3->execute();

$affichEquipes3 = ''; //la variable à remplir

while($ligne3 = $RQTExecEquipes3->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes3 = $affichEquipes3.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne3['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne3['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne3['position'].' - '.$ligne3['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne3['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne3['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne3['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne3['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne3['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne3['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes3); //on affiche le résultat

$titre4 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Pacific<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre4);

//requête à exécuter
$RQTEquipes4 = "SELECT * FROM equipe WHERE region = 'Pacific' ORDER BY nom";

$RQTExecEquipes4 = $cnx->prepare($RQTEquipes4);
$RQTExecEquipes4->execute();

$affichEquipes4 = ''; //la variable à remplir

while($ligne4 = $RQTExecEquipes4->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes4 = $affichEquipes4.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne4['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne4['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne4['position'].' - '.$ligne4['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne4['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne4['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne4['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne4['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne4['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne4['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes4); //on affiche le résultat

$titre5 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Southwest<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre5);

//requête à exécuter
$RQTEquipes5 = "SELECT * FROM equipe WHERE region = 'Southwest' ORDER BY nom";

$RQTExecEquipes5 = $cnx->prepare($RQTEquipes5);
$RQTExecEquipes5->execute();

$affichEquipes5 = ''; //la variable à remplir

while($ligne5 = $RQTExecEquipes5->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes5 = $affichEquipes5.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne5['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne5['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne5['position'].' - '.$ligne5['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne5['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne5['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne5['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne5['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne5['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne5['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes5); //on affiche le résultat

$titre6 = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Northwest<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titre6);

//requête à exécuter
$RQTEquipes6 = "SELECT * FROM equipe WHERE region = 'Northwest' ORDER BY nom";

$RQTExecEquipes6 = $cnx->prepare($RQTEquipes6);
$RQTExecEquipes6->execute();

$affichEquipes6 = ''; //la variable à remplir

while($ligne6 = $RQTExecEquipes6->fetch(PDO::FETCH_ASSOC)){ //boucle pour fetch le résultat de la requête
	$affichEquipes6 = $affichEquipes6.'<div class="containerEquipe">
										<div class="imageEquipe">
											<img src="../images/clubs/'.$ligne6['image'].'" alt="Logo équipe celtics"/>
										</div>
										<div class="containerInfosEquipe">
											<br/><h3>'.$ligne6['nom'].'</h3><br/><br/><br/>
											<div class="infosEquipe"><div class="positionEquipe">'.$ligne6['position'].' - '.$ligne6['region'].'</div><div>Surnom :<div>&nbsp;'.$ligne6['surnom'].'</div></div><div>Fondation :<div>&nbsp;'.$ligne6['fondation'].'</div></div><div>Manager :<div>&nbsp;'.$ligne6['manager'].'</div></div><div>Entraîneur :<div>&nbsp;'.$ligne6['entraineur'].'</div></div></div>
										</div>
										<div class="bilanEquipe">
											<br/><h3>BILAN</h3><br/><br/>
											<div>Nombre de victoires : <div>'.$ligne6['victoires_saison'].'</div></div><br/><br/>
											<div>Nombre de défaites : <div>'.$ligne6['defaites_saison'].'</div></div><br/><br/>
										</div>
									</div><br/>'; 
}

echo($affichEquipes6); //on affiche le résultat

?>