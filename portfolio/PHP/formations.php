<?php $formations=yaml_parse_file("Yaml/formations.yaml");?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PORTFOLIO Kylian</title>
        <link href="CSS/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="formations" class="formations">
            <h3>Formations</h3>
            <ul class="formation">
                <?php 
                    foreach($formations ['formation1'] AS $formation=>$tbFormations){
                        foreach($tbFormations AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                ?>
            </ul>
            <ul class="formation">
                <?php        
                    foreach($formations ['formation2'] AS $formation=>$tbFormations){
                        foreach($tbFormations AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                ?>
            </ul>
            <ul class="formation">
                <?php        
                    foreach($formations ['formation3'] AS $formation=>$tbFormations){
                        foreach($tbFormations AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                ?>
            </ul>
            <a href="CV/vieux CV.pdf"><h3>Mon CV</h3></a>
        </div>
    </body>
</html>