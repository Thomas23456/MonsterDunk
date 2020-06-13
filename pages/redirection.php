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
        <?php
            header('Refresh: 5; URL=../index.html');
        ?>

        <div class='redirection'>
            <div class='conteneurRedirect'>
                <span>Cette fonctionnalité reste à développer</span> 
                <div>
                    <span>Vous allez être redirigé vers l'accueil dans </span>
                    <span id="compteARebours"></span>
                <div>
                <a href="../index.html"><img src="../images/logo6.png" alt="Image logo Monster Dunk" class="logo effect"/></a>
                </div>
            </div>
        </div>
        <script>
            var seconde = 5, $seconde = document.querySelector('#compteARebours');
            (function compteARebours() {
                $seconde.textContent = seconde + ' secondes';
                if(seconde --> 0) setTimeout(compteARebours, 1000)
            })();
        </script>
    </body>
</html>