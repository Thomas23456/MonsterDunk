
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

//on récupère les infos dont on a besoin
$cpt = $_GET['nb'];
$idEquipe = $_GET['id'];

$RQTEquipe = "SELECT eq.id_equipe, eq.nom AS libelle, eq.surnom, eq.pays, eq.fondation, eq.manager, eq.entraineur, eq.image, divi.nom, comp.date_debut, comp.date_fin, resul.victoire, resul.defaite
				FROM equipe AS eq
				INNER JOIN division AS divi ON divi.id_division = eq.Division_id_division
				INNER JOIN resultat AS resul ON resul.Equipe_id_equipe = eq.id_equipe
				INNER JOIN competition AS comp ON resul.Competition_id_competition = comp.id_competition
				WHERE eq.id_equipe = $idEquipe";
				
$RQTExecEquipe = $cnx->prepare($RQTEquipe);
$RQTExecEquipe->execute();

$titreResume = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Résumé<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titreResume);

while($ligne1 = $RQTExecEquipe->fetch(PDO::FETCH_ASSOC)){
$resumeEquipe = '<div class="containerEquipe colorBorderEquipe'.$cpt.'">
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
				</div><br/>';
}

echo($resumeEquipe);

$titreResultats = '<div class="titreEquipe"><div class="ligne"></div><div><h3>Résultats<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titreResultats);

$RQTResultats = "SELECT * 
				FROM resultat AS res
				INNER JOIN competition AS comp ON res.Competition_id_competition = comp.id_competition
				WHERE res.Equipe_id_equipe = $idEquipe";

$RQTExecResultats = $cnx->prepare($RQTResultats);
$RQTExecResultats->execute();

$resultatsEquipe = '';

while($ligne2 = $RQTExecResultats->fetch(PDO::FETCH_ASSOC)){
$resultatsEquipe = $resultatsEquipe.'<div class="containerDetailsEquipe">
						<h3 class="colorTitreEquipe'.$cpt.'">Saison '.$ligne2['date_debut'].' - '.$ligne2['date_fin'].'</h3><br/>
						<div class="infosDetailsEquipe">
							<div>
								<h3>Compétition</h3><br/>
								<div class="competDetailsEquipe colorTitreEquipe'.$cpt.'">'.$ligne2['nom'].'</div><br/>
							</div>
							<div>
								<h3>Classement</h3><br/>
								<div class="equipeDetailsResultats resultatsDisplay"><div class="colorTitreEquipe'.$cpt.'">'.$ligne2['classement'].'</div><div>&nbsp;/ 15</div></div><br/>
							</div>
							<div>
								<h3>Victoires</h3><br/>
								<div class="equipeDetailsResultats colorTitreEquipe'.$cpt.'">'.$ligne2['victoire'].'</div><br/>
							</div>
							<div>
								<h3>Défaites</h3><br/>
								<div class="equipeDetailsResultats colorTitreEquipe'.$cpt.'">'.$ligne2['defaite'].'</div><br/>
							</div>
							<div>
								<h3>Ratio</h3><br/>
								<div class="equipeDetailsResultats colorTitreEquipe'.$cpt.'">'.$ligne2['ratio'].'</div><br/>
							</div>
							<div>
								<h3>Points marqués</h3><br/>
								<div class="equipeDetailsResultats colorTitreEquipe'.$cpt.'">'.$ligne2['points_marques'].'</div><br/>
							</div>
						</div><br/>
					</div><br/>';
}

echo($resultatsEquipe);

$titreComposition = '<div class="titreEquipe2"><div class="ligne"></div><div><h3>Composition<br/><br/></h3></div><div class="ligne"></div></div><br/>';

echo($titreComposition);

//on récupère les images pour chaque poste des joueurs

$RQTCompo1 = "SELECT * 
			FROM joueur AS jou
			INNER JOIN poste AS pos ON pos.id_poste = jou.Poste_id_poste
			WHERE pos.libelle = 'Meneur' AND jou.Equipe_id_equipe = $idEquipe";

$RQTExecCompo1 = $cnx->prepare($RQTCompo1);
$RQTExecCompo1->execute();

$listeMeneurs = '';
				
while($line1 = $RQTExecCompo1->fetch(PDO::FETCH_ASSOC)){
	$listeMeneurs = $listeMeneurs.'<img src="../images/joueurs/'.$line1['image_joueur'].'" alt="Image joueur Celtics"/>';
}
				
$RQTCompo2 = "SELECT * 
			FROM joueur AS jou
			INNER JOIN poste AS pos ON pos.id_poste = jou.Poste_id_poste
			WHERE pos.libelle = 'Arrière' AND jou.Equipe_id_equipe = $idEquipe";

$RQTExecCompo2 = $cnx->prepare($RQTCompo2);
$RQTExecCompo2->execute();

$listeArrieres = '';

while($line2 = $RQTExecCompo2->fetch(PDO::FETCH_ASSOC)){
	$listeArrieres = $listeArrieres.'<img src="../images/joueurs/'.$line2['image_joueur'].'" alt="Image joueur Celtics"/>';
}
				
$RQTCompo3 = "SELECT * 
			FROM joueur AS jou
			INNER JOIN poste AS pos ON pos.id_poste = jou.Poste_id_poste
			WHERE pos.libelle = 'Pivot' AND jou.Equipe_id_equipe = $idEquipe";

$RQTExecCompo3 = $cnx->prepare($RQTCompo3);
$RQTExecCompo3->execute();

$listePivots = '';

while($line3 = $RQTExecCompo3->fetch(PDO::FETCH_ASSOC)){
	$listePivots = $listePivots.'<img src="../images/joueurs/'.$line3['image_joueur'].'" alt="Image joueur Celtics"/>';
}

$RQTCompo4 = "SELECT * 
			FROM joueur AS jou
			INNER JOIN poste AS pos ON pos.id_poste = jou.Poste_id_poste
			WHERE pos.libelle = 'Ailier' AND jou.Equipe_id_equipe = $idEquipe";

$RQTExecCompo4 = $cnx->prepare($RQTCompo4);
$RQTExecCompo4->execute();

$listeAiliers = '';

while($line4 = $RQTExecCompo4->fetch(PDO::FETCH_ASSOC)){
	$listeAiliers = $listeAiliers.'<img src="../images/joueurs/'.$line4['image_joueur'].'" alt="Image joueur Celtics"/>';
}

$RQTCompo5 = "SELECT * 
			FROM joueur AS jou
			INNER JOIN poste AS pos ON pos.id_poste = jou.Poste_id_poste
			WHERE pos.libelle = 'Ailier fort' AND jou.Equipe_id_equipe = $idEquipe";

$RQTExecCompo5= $cnx->prepare($RQTCompo5);
$RQTExecCompo5->execute();

$listeAiliersForts = '';

while($line5 = $RQTExecCompo5->fetch(PDO::FETCH_ASSOC)){
	$listeAiliersForts = $listeAiliersForts.'<img src="../images/joueurs/'.$line5['image_joueur'].'" alt="Image joueur Celtics"/>';
}

$joueursComposition = '<div class="containerComposition">
						<img src="../images/detailsEquipe/terrain.png" alt="Image terrain"/>
						<div class="composition1">
							<div class="titreCompo"><h3>Meneurs</h3></div>
							<div>
								'.$listeMeneurs.'
							</div>
						</div>
						<div class="composition2">
							<div class="titreCompo"><h3>Arrières</h3></div>
							<div>
								'.$listeArrieres.'
							</div>
						</div>
						<div class="composition3">
							<div class="titreCompo"><h3>Pivots</h3></div>
							<div>
								'.$listePivots.'
							</div>
						</div>
						<div class="composition4">
							<div class="titreCompo"><h3>Ailiers forts</h3></div>
							<div>
								'.$listeAiliersForts.'
							</div>
						</div>
						<div class="composition5">
							<div class="titreCompo"><h3>Ailiers</h3></div>
							<div>
								'.$listeAiliers.'
							</div>
						</div>
					</div>';
					
echo($joueursComposition);

?>