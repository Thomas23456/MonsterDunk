<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
	<head>
		<title>Monster Dunk</title>
		<link rel="icon" type="images/png" href="images/basketball.png" title="basketball flaticon"/>
		<link rel="stylesheet" type="text/css" href="../css/commun.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="js/main.js"></script>
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
            <li><a href="../pages/news.php" class="textMenu">News</a></li><!--
			--><li><a href="../pages/equipes.php" class="textMenu">Equipes</a></li><!--
			--><li><a href="../pages/match.php" class="textMenu">Matchs</a></li><!--
			--><li><a href="../pages/resultat.php" class="textMenu bord">Résultats</a></li>
    </nav>
    <div class="conteneurPageResultat">
        <div class="conteneurResultat">
            <div class="conteneurTitreResultat">
                <img class="trophee" src="../images/resultats/award.png" alt="nba trophée">
                <?php
                    try{
                        $cnx = new PDO('mysql:host=localhost;dbname=monsterdunk;port=3306', 'root','');
                    }
                    catch(PDOException $e){
                        print($e->getMessage()."\n");
                        exit;
                    }

                    $req1="SELECT * FROM Competition as c";
                    $sts1=$cnx->prepare($req1);
                    $sts1->execute();
                    $line1=$sts1->fetch(PDO::FETCH_ASSOC);
                    echo '
                    <span>Compétition</span>
                    <span>'.$line1['date_debut'].' - '.$line1['date_fin'].'</span>
                    
                    ';
                ?>
            </div> 
            <div class="conteneurConference">
            <?php
                $req="SELECT * FROM Resultat as r
                INNER JOIN Equipe as e ON e.id_equipe = r.Equipe_id_equipe
                WHERE Competition_id_competition=2
                ORDER BY classement
                LIMIT 15";
                $sts=$cnx->prepare($req);
                $sts->execute();
                echo '                
                <table>
                    <caption>Conférence Est</caption>
                    <tbody>
                        <tr>
                            <th>Rang</th>
                            <th>Équipe</th>
                            <th>V</th>
                            <th>D</th>
                            <th>%</th>
                            <th>Pt</th>
                        </tr>';
                while($line=$sts->fetch(PDO::FETCH_ASSOC)){
                    echo'
                            <tr>
                                <td>'.$line['classement'].'</td>
                                <td class="equipeRank"><img src=../images/clubs/'.$line['image'].'><a href="detailsEquipe.php?idEquipe='.$line['id_equipe'].'">'.$line['nom'].'</a></td>
                                <td>'.$line['victoire'].'</td>
                                <td>'.$line['defaite'].'</td>
                                <td>'.$line['ratio'].'</td>
                                <td>'.$line['points_marques'].'</td>
                            </tr>';
                };
                echo '           
                </tbody>
                </table>
                ';

                $req="SELECT * FROM Resultat as r
                INNER JOIN Equipe as e ON e.id_equipe = r.Equipe_id_equipe
                WHERE Competition_id_competition=1
                ORDER BY classement
                LIMIT 15";
                $sts=$cnx->prepare($req);
                $sts->execute();
                echo '                
                <table>
                    <caption>Conférence Ouest</caption>
                    <tbody>
                        <tr>
                            <th>Rang</th>
                            <th>Équipe</th>
                            <th>V</th>
                            <th>D</th>
                            <th>%</th>
                            <th>Pt</th>
                        </tr>';
                while($line=$sts->fetch(PDO::FETCH_ASSOC)){
                    echo'
                            <tr>
                                <td>'.$line['classement'].'</td>
                                <td class="equipeRank"><img src=../images/clubs/'.$line['image'].'><a href="detailsEquipe.php?idEquipe='.$line['id_equipe'].'">'.$line['nom'].'</td>
                                <td>'.$line['victoire'].'</td>
                                <td>'.$line['defaite'].'</td>
                                <td>'.$line['ratio'].'</td>
                                <td>'.$line['points_marques'].'</td>
                            </tr>';
                };
                echo '           
                </tbody>
                </table>';
            ?>
            </div>
        </div>
    </div>
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