<?php
$display = '';
session_start();
if (isset($_SESSION['lastName']) && isset($_SESSION['firstName']) && isset($_SESSION['age'])) {
    $display = 'Votre nom est "' . $_SESSION['lastName'] . '" et votre prénom est "' . $_SESSION['firstName'] . '". Vous avez ' . $_SESSION['age'] . ' ans.';
}
if (isset($_POST['reset'])) {
    session_unset ();
    session_destroy ();
    header ('location: exercice_2.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.<br />Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        <div>
            <a href="ex2-user.php?lastName=Nemare&firstName=Jean&age=17">Hello :)</a>
        </div>
        <div>
            <p><?= htmlspecialchars($display); ?></p>
            <form method="post" action="exercice_2.php">
                <input type = "submit" name = "reset" value = "Effacer la session" />
            </form>
        </div>
    </body>
</html>
        