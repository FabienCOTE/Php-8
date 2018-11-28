<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        </div>
        <div>
            <p>Login : <?= $_COOKIE['login']; ?></p>
            <p>Mot de passe : <?= $_COOKIE['password']; ?></p>
        </div>
    </body>
</html>