<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion - Connexion</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/register.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h1 class="titre">Opinion<span class="dot">.</span></h1>
    </header>
    <div class="form-ctn">
        <form method="post" action="." class="corps">
            <h1 class="background-title">Connexion</h1>
            <div>
                <label>
                    Adresse mail :
                    <input type="email" name="email">
                </label>
                <label>
                    Mot de passe :
                    <input type="password" name="password">
                </label>

                <a class="register-link" href="?page=register/1">Pas de compte ? Inscrivez-vous.</a>

                <input type="submit" class="bouton-validation" value="Se connecter">
            </div>
        </form>
    </div>
</body>

</html>