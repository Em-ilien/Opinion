<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fil.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">
    <title>Opinion.</title>
</head>
<body>
    <header id="header">
        <div class="logo-header">
            <a href="."><h1 class="logo">Opinion<span class="dot">.</span></h1></a>
        </div>
        <div class="menu-header">
            <ul>
                <li><a href=".">Accueil</a></li>
                <li><a href=".">Fil d'actualité</a></li>
                <li><a href="?page=user&user=<?= $userId ?>">Profil</a></li>
                <li><a href="?page=logout">Déconnexion</a></li> <!-- TODO: supprimer le lien et ouvrir une popup avec du JS -->
            </ul>
            <div class="search-bar-header">
                <input type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="user-menu">
                <!-- TODO: change default avatar to current user avatar, if exists -->
                <span class="user-icon"><img id="user-img" src="public/img/no_icon.png" alt="icône utilisateur"></span>
                <span id="user-triangle-menu"></span>
            </div>
        </div>
    </header>
</body>
</html>