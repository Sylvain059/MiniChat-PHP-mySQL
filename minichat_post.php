<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    /* Connexion à la base de données*/
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'Skaoune88');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

    /* Requête préparé */
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

    /* Redirection de l'utilisateur vers la page minichat.php */
header('Location: minichat.php');
?>

</body>

</html>
