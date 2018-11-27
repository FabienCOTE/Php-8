<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    if (is_string($_POST['login']) && is_string($_POST['password'])) {
        setcookie("login",$_POST['login']);
        setcookie("password",$_POST['password']);
        header ('location: exercice_5.php');
    } else {
        $display = 'Vous devez indiquer votre login et mot de passe dans le formulaire';
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
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
        </div>
        <div>
            <form method="post" action="">
                <p>
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" required />
                    <br />
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" required />
                    <input type="submit" value="Envoyer" />
                </p>
            </form>
        </div>
        <div>
            <p>Login : <?= $_COOKIE['login']; ?></p>
            <p>Mot de passe : <?= $_COOKIE['password']; ?></p>
        </div>
    </body>
</html>