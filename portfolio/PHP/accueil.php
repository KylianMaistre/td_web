<?php $accueil=yaml_parse_file("Yaml/accueil.yaml");?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PORTFOLIO Kylian</title>
        <link href="CSS/styles.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php 
                echo'<h1>'.$accueil['moi']['prenom'].' '.$accueil['moi']['nom'].'</h1>';
                echo'<h2>'.$accueil['accroche'].'</h2>';
            ?>
        </div>
    </body>
</html>