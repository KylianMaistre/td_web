<?php
$menu=yaml_parse_file("menu.yaml")
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>PORTFOLIO Kylian</title>
            <link href="styles.css" rel="stylesheet">
        </head>
        <body>
            <div id="wrap">
                <ul class="menu">
                    <?php 
                        foreach($menu['menu'] AS $elt){
                            echo'<li><a>'.$elt.'</a></li>';
                        }
                    ?>
                </ul>
                    <image id="linkedin" src="image/logolink.png"></image>
                    <image id="git" src="image/logogit.png"></image>
            </div>
        </body>
    </html>
