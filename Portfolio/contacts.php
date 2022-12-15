<?php
$menu=yaml_parse_file("menu.yaml");
$contacts=yaml_parse_file("contacts.yaml");
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
                    foreach($contacts['contacts'] AS $formulaire=>$tbContacts){
                        foreach($tbContacts AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                    echo'<p>'.$contacts['envoi d’un mail vers votre adresse'].'</p>';
                ?>
                
            </div>
        </body>
    </html>