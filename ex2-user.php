<?php
if (isset($_GET['lastName']) && isset($_GET['firstName']) && isset($_GET['age'])) {
    if (!is_numeric($_GET['lastName']) || !is_numeric($_GET['firstName']) || is_numeric($_GET['age'])) {
        session_start ();
        $_SESSION['lastName'] = $_GET['lastName'];
        $_SESSION['firstName'] = $_GET['firstName'];
        $_SESSION['age'] = $_GET['age'];
        header ('location: exercice_2.php');
    } else {
        $display = 'Vous devez indiquer votre nom et prénom dans la barre d\'adresse';
    }
} else {
    $display = '';
}
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2 User</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <p><?= htmlspecialchars($display); ?></p>
    </body>
</html>
