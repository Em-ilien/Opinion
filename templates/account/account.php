<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte | Opinion</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <!-- <link rel="stylesheet" href="public/css/user.css"> -->
    <link rel="stylesheet" href="public/css/account.css">
</head>

<body>
    <header id="header">
        <div class="logo-header">
            <a href=".">
                <h1 class="logo">Opinion<span class="dot">.</span></h1>
            </a>
        </div>
        <div class="menu-header">
            <ul>
                <li><a href=".">Accueil</a></li>
                <li><a href=".">Fil d'actualité</a></li>
                <li><a href="?page=user">Profil</a></li>
                <li><a href="?page=logout">Déconnexion</a></li>
                <!-- TODO: supprimer le lien et ouvrir une popup avec du JS -->
            </ul>
            <div class="search-bar-header">
                <input disabled type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="user-menu">
                <!-- TODO: change default avatar to current user avatar, if exists -->
                <span class="user-icon"><img id="user-img" src="public/img/default_avatar_user.png"
                        alt="icône utilisateur"></span>
                <span id="user-triangle-menu"></span>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="profil">
            <h1>Mon profil</h1>
            <div class="fields">
                <div class="avatar">
                    <label>
                        Avatar
                        <input disabled type="image" src="<?= $user->getAvatarImagePath() ?>" alt="Avatar">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
                <div>
                    <label>
                        Pseudonyme
                        <input disabled type="text" name="nickname" value="<?= $user->getNickname() ?>">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
                <div>
                    <label>
                        Nom d'utilisateur
                        <input disabled type="text" name="username" value="@<?= $user->getUsername() ?>">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
                <div>
                    <label>
                        Biographie
                        <textarea disabled name="biography"><?= $user->getBiography() ?></textarea>
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
            </div>
        </div>
        <div class="account">
            <h1>Mon compte</h1>
            <div class="fields">
                <div>
                    <label>
                        Adresse email
                        <input disabled type="text" name="email" value="<?= $user->getEmail() ?>">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
                <div>
                    <label>
                        Mot de passe
                        <input disabled type="password" name="password" value="••••••••">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
                <div>
                    <label>
                        Date de naissance
                        <input disabled type="date" name="nickname" value="<?= $user->getBirthday() ?>">
                    </label>
                    <button class="edit-btn btn">Modifier</button>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/editing-account-informations.js"></script>
</body>

</html>