<?php
$menu=yaml_parse_file("menu.yaml");
$accueil=yaml_parse_file("accueil.yaml");
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <div>
                <?php 
                    include("menu.php");

                    include("accueil.php");

                    include("a_propos.php");

                    include("competences.php");

                    include("experiences.php");

                    include("formations.php");

                    include("contact.php");
                ?>
                
            </div>
        </body>
    </html>
    
