<?php
if (isset($_POST['lastName']) && isset($_POST['firstName'])) {
    if (!is_numeric($_POST['lastName']) && !is_numeric($_POST['firstName'])) {
        $display = 'Votre nom est "' . $_POST['lastName'] . '" et votre prénom est "' . $_POST['firstName'] . '".';
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans le formulaire';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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