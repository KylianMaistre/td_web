<?php
$menu=yaml_parse_file("menu.yaml");
$formations=yaml_parse_file("formations.yaml");
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
                    foreach($formations['formations'] AS $formation=>$tbFormations){
                        foreach($tbFormations AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                    echo'<p>'.$formations['cv'].'</p>';
                ?>
                
            </div>
        </body>
    </html>