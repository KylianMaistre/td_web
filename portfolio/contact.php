<?php
$contact=yaml_parse_file("contact.yaml");
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
                    foreach($contact['contacts'] AS $formulaire=>$tbContacts){
                        foreach($tbContacts AS $description=>$réponse){
                            echo'<p>'.$réponse.'</p>';
                        }
                    }
                    echo'<p>'.$contact['envoi d’un mail vers votre adresse'].'</p>';
                ?>
                
            </div>
        </body>
    </html>