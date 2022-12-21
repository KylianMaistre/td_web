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
                    <a href="https://www.linkedin.com/in/kylian-maistre-43830025b/"><image class="linkedin" src="image/logolink.png"></image></a>
                    <a href="https://github.com/KylianMaistre"><image class="git" src="image/logogit.png"></image></a>
                </ul>
            </div>
        </body>
    </html>