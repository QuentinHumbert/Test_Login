<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div id="container">
        <form action="login.php" method="post">
            <h1>Connexion</h1>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" id="username" required>

            <label for="password">Mot de Passe</label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>

            <input type="submit" id="submit" value="LOGIN">
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1) {
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                } else if ($err == 2) {
                    echo "<p style='color:red'>Veuiller insérer un nom d'utilisateur et un mot de passe</p>";
                }

            }
            ?>
        </form>
    </div>
</body>

</html>