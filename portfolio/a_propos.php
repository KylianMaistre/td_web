<?php
$menu=yaml_parse_file("menu.yaml");
$a_propos=yaml_parse_file("a_propos.yaml");
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <?php include("menu.php"); ?>
            <div>
                <?php 
                    echo'<h2>'.$a_propos['accroche'].'</h2>';
                    echo'<p>'.$a_propos['présentation'].'</p>';
                ?>
                
            </div>
        </body>
    </html>