
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

$RQTNews = 'SELECT * FROM article ORDER BY date_ajout_article DESC'; //la requête à exécuter

$RQTExecNews = $cnx->prepare($RQTNews);
$RQTExecNews->execute();

$affichNews = ''; //la variable à remplir

while($ligne = $RQTExecNews->fetch(PDO::FETCH_ASSOC)){ //boucle pour remplir la variable à afficher
$affichNews = $affichNews.'<div class="containerNews">
								<div class="imageNews">
									<img src="../images/articles/'.$ligne['lien_img'].'" alt="Logo équipe celtics"/>
								</div>
								<div class="containerInfosNews">
									<div class="newsType">'.$ligne['type_article'].'</div>
									<div class="newsTitre">'.$ligne['titre'].'</div><br/>
									<div>'.$ligne['description'].'</div>
									<div class="newsEditeur"><div>par '.$ligne['auteur'].', '.$ligne['date_ajout_article'].'</div></div>
								</div>
							</div><br/>';						
}

echo($affichNews);

?>