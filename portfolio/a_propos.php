<?php
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
            <div id="apropos" class="accroche">
                <?php echo'<h2>'.$a_propos['accroche'].'</h2>'?>
            </div>
            <div class="presentation">
                <?php echo'<h5>'.$a_propos['présentation'].'</h5>';?>
            </div>
        </body>
    </html>