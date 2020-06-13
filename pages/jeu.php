<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jeu</title>
        <link rel="stylesheet" href="../css/jeu.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="../js/main.js"></script>
    </head>

    <body>
        <div id="conteneurJeu">
            <div id="conteneurJeuGauche">
                <div id="conteneurEquipeAll">
                    <span class="titreGeneralEquipe">Liste des Équipes</span>
                    <div class="instructionEquipe">
                        <span class="instructionTitre">Instruction</span>
                        <span>: Choisis ton équipe en appuyant sur </span>
                        <i class='far fa-arrow-alt-circle-right'></i>
                        <br/>
                        <span>Tu peux consulter le détail des joueurs de l'équipe</span>
                    </div>
                    <div class="conteneurEquipe conteneurEquipeCeltics">
                        <div class="enteteEquipe enteteEquipeCeltics">  
                            <div class="nomEquipe equipeMenuCeltics">
                                <span class="libelleEquipe">Boston Celctics</span>
                                <span class="listingJoueur listingJoueurCeltics">Liste des joueurs<i class="material-icons">keyboard_arrow_down</i></span>
                            </div>
                            <a href="jeu.php?equipe=Boston Celtics" class="boutonAjoutEquipe"><i class='far fa-arrow-alt-circle-right'></i></a>
                        </div>
                        <div class="conteneurListeEquipe">
                            <ul class="joueurListe joueurListeCeltics">
                                <?php                                    
                                    try{
                                        $cnx = new PDO('mysql:host=localhost;dbname=monsterdunk;port=3306', 'root','');
                                    }
                                    catch(PDOException $e){
                                        print($e->getMessage()."\n");
                                        exit;
                                    }
                                    $rq="SELECT * FROM Joueur as j
                                    INNER JOIN Equipe as e ON e.id_equipe=j.Equipe_id_equipe
                                    WHERE e.nom='Boston Celtics'";
                                    $sts=$cnx->prepare($rq);
                                    $sts->execute();
                                    $line=$sts->fetch(PDO::FETCH_ASSOC);
                                    while($line=$sts->fetch(PDO::FETCH_ASSOC)){
                                        echo'<li class="">'.$line['prenom'].'</li>';}
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="conteneurEquipe conteneurEquipeRaptors">
                        <div class="enteteEquipe enteteEquipeRaptors">  
                            <div class="nomEquipe equipeMenuRaptors">
                                <span class="libelleEquipe">Toronto Raptors</span>
                                <span class="listingJoueur listingJoueurRaptors">Liste des joueurs<i class="material-icons">keyboard_arrow_down</i></span>
                            </div>
                            <a href="jeu.php?equipe=Boston Raptors" class="boutonAjoutEquipe"><i class='far fa-arrow-alt-circle-right'></i></a>
                        </div>
                        <div class="conteneurListeEquipe">
                            <ul class="joueurListe joueurListeRaptors">
                                <?php                                    
                                    try{
                                        $cnx = new PDO('mysql:host=localhost;dbname=monsterdunk;port=3306', 'root','');
                                    }
                                    catch(PDOException $e){
                                        print($e->getMessage()."\n");
                                        exit;
                                    }
                                    $rq="SELECT * FROM Joueur as j
                                    INNER JOIN Equipe as e ON e.id_equipe=j.Equipe_id_equipe
                                    WHERE e.nom='Boston Raptors'";
                                    $sts=$cnx->prepare($rq);
                                    $sts->execute();
                                    $line=$sts->fetch(PDO::FETCH_ASSOC);
                                    while($line=$sts->fetch(PDO::FETCH_ASSOC)){
                                        echo'<li>'.$line['prenom'].'</li>';}
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="conteneurJeuDroit">
                <span class="titreGeneralEquipe">Équipe sélectionée</span>
                <div class="instructionEquipe">
                    <span class="instructionTitre">Instruction</span>
                    <span>: Déplacez les joueurs de votre choix sur le poste que vous voulez sur le terrain </span>
                 </div>
                <div id="conteneurSelectionEquipe">
                    <ul class="selectionJoueur sortable_list connectedSortable">
                    <?php
                    

                        if(isset($_GET['equipe'])){
                            $equipe=$_GET['equipe'];
                            $rq="SELECT * FROM Joueur as j
                            INNER JOIN Equipe as e ON e.id_equipe=j.Equipe_id_equipe
                            WHERE e.nom='$equipe'";
                            $sts=$cnx->prepare($rq);
                            $sts->execute();
                            $line=$sts->fetch(PDO::FETCH_ASSOC);
                            while($line=$sts->fetch(PDO::FETCH_ASSOC)){
                                echo'
                                <li class="conteneurJoueurSelection'.$line['surnom'].'">
                                    <img src="../images/joueurtest.PNG alt=""image joueur">
                                    <div class="nomPrenom">
                                        <div><span class="sousligne">Prénom</span><span>:'.$line['prenom'].'</span></div>
                                        <div><span class="sousligne">Nom</span><span>:'.$line['nom_joueur'].'</span></div>
                                    </div>

                                </li>';}
                        } else {
                        echo'<span class="veuillezSelectionner">Aucune équipe sélectionnée</span>';
                        }
                    ?>
                    </ul>
                </div>
                <div id="conteneurTerrain">
                    <div class="c1"></div>
                    <div class="c2 csortable sortable_list connectedSortable"></div>
                    <div class="c3"> </div>
                    <div class="c4 csortable sortable_list connectedSortable"></div>
                    <div class="c5"> </div>
                    <div class="c6 csortable sortable_list connectedSortable"></div>
                    <div class="c7"> </div>
                    <div class="c8 csortable sortable_list connectedSortable"></div>
                    <div class="c9"> </div>
                    <div class="c10 csortable sortable_list connectedSortable"></div>
                </div>
                <div id="conteneurResetValidation">
                    <a class="resetSelection" href="jeu.php">Reset</a>
                    <a class="valideSelection" href="redirection.php">Valider</a>
                </div>
            </div>
        </div>
        <script src="../js/main.js"></script>
    </body>
</html>