<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page connexion</title>
    <link href="css/connexion.css" rel="stylesheet" type="text/css">
    <link href="css/inscription.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <?php include ("inc/headerPublic.php") ?>
    <main>
        <div>
            <h1>Connexion</h1>
            <form method="POST" id="connexion">
                <label for="Email">Email:</label>
                <input type="text" id="username" name="email" placeholder="email"><br>
                <label for="password">Mot de passe: </label>
                <input type="password" id="mdp" name="password" placeholder="votre mot de passe"> <br><br>
                <button type="submit" id="envoyer" name="submit">Connexion</button>
            </form>
        </div>
    </main>
</body>

</html>