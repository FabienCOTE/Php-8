<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 1</h1>
            <p>Faire une page HTML permettant de donner à l'utilisateur :<br />son User Agent<br />son adresse ip<br />le nom du serveur</p>
        </div>
        <div>
            <p>User Agent : <?= $_SERVER['HTTP_USER_AGENT']; ?></p>
            <p>Adresse IP : <?= $_SERVER['REMOTE_ADDR']; ?></p>
            <p>Nom serveur : <?= $_SERVER['SERVER_NAME']; ?></p>
        </div>
    </body>
</html>