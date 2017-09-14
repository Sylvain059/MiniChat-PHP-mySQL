<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minichat PHP/SQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="minichat_post.php" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="Pseudo" />
        <br>
        <label for="message">Message</label>
        <input type="text" id="message" name="message">
        <br>
        <input type="submit" value="Envoyer">

    </form>
</body>

</html>
