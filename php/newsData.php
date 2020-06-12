
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

echo 'okay';

?>