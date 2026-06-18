<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paladi - Plateforme de jeux</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur Paladi</h1>
        
        <form action="login.php" method="POST">
            <h2>Connexion</h2>
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="password" name="mdp" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>

        <hr>

        <form action="register.php" method="POST">
            <h2>Inscription</h2>
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="password" name="mdp" placeholder="Mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
