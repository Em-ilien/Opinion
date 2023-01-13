<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fil.css">
</head>
<body>
    <header id="header">
        <div class="logo-header">
            <a href="."><h1 class="titre">Opinion<span class="dot">.</span></h1></a>
        </div>
        <ul>
            <li><a href=".">Accueil</a></li>
            <li><a href=".">Fil d'actualité</a></li>
            <li><a href="?page=user&user=<?= $userId ?>">Profil</a></li>
            <li><a href="#">Déconnexion</a></li> <!-- TODO: supprimer le lien et ouvrir une popup avec du JS -->
        </ul>
        <div class="search-bar-header">
            <input type="text" name="search" placeholder="Rechercher">
        </div>
    </header>
</body>
</html>