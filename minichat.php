<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minichat PHP/SQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Formulaire pour entrer le pseudo et le message -->
    <form action="minichat_post.php" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="Pseudo" />
        <br>
        <label for="message">Message</label>
        <input type="text" id="message" name="message">
        <br>
        <input type="submit" value="Envoyer">

    </form>

    <!-- Début du PHP / Connexion à la base de donnéés -->
    <?php    
    
        try

            {

                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Skaoune88');

            }

        catch(Exception $e)

            {

                die('Erreur : '.$e->getMessage());

            }
    
        $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 5');
    
        /* Boucle pour afficher les derniers messages*/
        
        while ($donnees = $reponse->fetch())
            {
                echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
            }

        $reponse->closeCursor();
    ?>
</body>

</html>
