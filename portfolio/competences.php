<?php
$competences=yaml_parse_file("competences.yaml");
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <div class="competences">
                <?php
                    foreach($competences AS $domaine=>$tbCompetences){
                        echo'<h3>'.$domaine.'</h3>';
                    foreach($tbCompetences AS $competence=>$niveau){
                        echo'<h4>'.$competence.'</h4>';
                        echo'<div class="container"><div class="skill" style="width:'.$niveau.'%">'.$niveau.'%</div></div>';
                    }
                }
                ?>
            </div>
    </html>