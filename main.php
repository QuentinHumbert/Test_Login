<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bienvenue</title>
</head>
<body>
    <div id='container'>
        <?php
            // Détecter si le username de la variable globale n'est pas vide
            if($_SESSION['username'] != ""){
                $user = $_SESSION['username'];
            }
            echo "Bonjour $user, Bienvenue sur la page d'accueil"
        ?>
    </div>
</body>
</html>