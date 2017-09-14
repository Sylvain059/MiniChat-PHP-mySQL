<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Mini-chat</title>
</head>

<body>
    <!--  Création d'un formulaire pour le pseudo & le message  -->
    <div class="jumbotron">
        <h1>MiniChat PHP/mySQL</h1>
        <form action="minichat_post.php" method="post">
            <p>
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo"><br />
                <label for="message">Message :</label>
                <input type="text" name="message" id="message"><br />
                <input type="submit" value="Envoyer">
            </p>
        </form>
    </div>


    <?php


    /* Connexion à la base de donnée en vérifiant les potentielles erreurs */
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'Skaoune88');
}

catch(Exception $e)

{
        die('Erreur : '.$e->getMessage());
}?>

        <div class="container answer">

            <?php
            
            /* Reception des derniers messages enregistré */
            $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 5'); 
           
            /* Boucle pour afficher les messages */
            while ($donnees = $reponse->fetch()) { echo '
            <p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>'; } $reponse->closeCursor(); 
            
            ?>
        </div>

</body>

</html>
