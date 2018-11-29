<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    if (is_string($_POST['login']) && is_string($_POST['password'])) {
        setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
        header ('location: exercice_3.php');
    } else {
        $display = 'Vous devez indiquer votre login et mot de passe dans le formulaire';
    }
} else {
    $display = '';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
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
    </body>
</html>