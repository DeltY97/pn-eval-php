<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue!</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>
<body>
    <!-- Créer un formulaire pour récupérer le nom de l'utilisateur connecté -->
    <div id="formulaire">
        <form method="post" id="loginForm">
            <div class="formLine">
                <label for="username">Nom d'utilisateur</label>
                <input type="usename" id="username" name="username" required>
            </div>
            <!-- <div class="formLine">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div> -->
            <div class="formLine">
                <input type="submit" value="Se connecter" class="loginBouton">
            </div>
        </form>
    </div>
</body>
</html>