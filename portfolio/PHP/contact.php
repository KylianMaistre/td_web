<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PORTFOLIO Kylian</title>
        <link href="CSS/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id=contact>
        <h3>Pour me Contactez</h3>
        <form method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="sujet" placeholder="Sujet" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <input type="submit" value="envoyer le message">
        </form>
        <?php
        if (isset($_POST['message'])) {
            $message = "Ce message vous a été envoyé via la page de contact de votre site
            Nom : " . $_POST["nom"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];

            $retour = mail("kylian.maistre@sts-sio-caen.info", $_POST["sujet"], $_POST["message"], "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if ($retour) {
                echo "<p>L'email a bien été envoyé.</p>";
            }
        }
        ?>
        </div>
    </body>
</html>