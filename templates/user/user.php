<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@<?= $askedUser->getUsername() ?> | Opinion</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fil.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/user.css">
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
                <input type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="user-menu">
                <!-- TODO: change default avatar to current user avatar, if exists -->
                <span class="user-icon"><img id="user-img" src="public/img/no_icon.png" alt="icône utilisateur"></span>
                <span id="user-triangle-menu"></span>
            </div>
        </div>
    </header>

    <div class="container">
        <aside class="user-profil">
            <div>
                <div class="informations">
                    <div class="identity">
                        <img src="<?= $askedUser->getAvatarImagePath() ?>" alt="Avatar" class="avatar">
                        <span class="nickname">
                            <?= $user->getNickname() ?>
                        </span>
                        <span class="username">@<?= $user->getUsername() ?></span>
                    </div>
                    <div class="biography">
                        <p><?= $user->getBiography() ?></p>
                    </div>
                </div>
                <?php if ($askedUserId == $userId) { ?>
                    <div class="edit-btn-ctn">
                        <a href="?page=account" class="edit-btn">Modifier</a>
                    </div>
                <?php } ?>
            </div>
            <?php if ($askedUserId == $userId) { ?>
                <div class="btn write-btn">
                    Écrire
                </div>
            <?php } ?>
        </aside>
        <main class="fil">
            <div class="post">
                <div class="profile">
                    <div class="profile-img">
                        <img src="public/img/no_icon.png" alt="icône utilisateur">
                    </div>
                    <div class="profile-name">
                        <h3>John Doe</h3>
                    </div>
                </div>
                <div class="content" onmouseover="setCommentariesVisible(this)" onmouseout="setCommentariesHidden(this)">
                    <div class="message">
                        Bonjour à tous, je suis nouveau ici. Comment est ma PP ?!
                    </div>
                    <div class="content-footer">
                        <div class="see-commentaries hidden">
                            <a href="#">Voir les commentaires</a>
                        </div>
                        <div class="date">
                            le 14 janvier 2021 à 14h00
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="profile">
                    <div class="profile-img">
                        <img src="public/img/no_icon.png" alt="icône utilisateur">
                    </div>
                    <div class="profile-name">
                        <h3>John Doe</h3>
                    </div>
                </div>
                <div class="content" onmouseover="setCommentariesVisible(this)" onmouseout="setCommentariesHidden(this)">
                    <div class="message">
                        Bonjour à tous, je suis nouveau ici. Comment est ma PP ?!
                    </div>
                    <div class="content-footer">
                        <div class="see-commentaries hidden">
                            <a href="#">Voir les commentaires</a>
                        </div>
                        <div class="date">
                            le 14 janvier 2021 à 14h00
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="profile">
                    <div class="profile-img">
                        <img src="public/img/no_icon.png" alt="icône utilisateur">
                    </div>
                    <div class="profile-name">
                        <h3>John Doe</h3>
                    </div>
                </div>
                <div class="content" onmouseover="setCommentariesVisible(this)" onmouseout="setCommentariesHidden(this)">
                    <div class="message">
                        Bonjour à tous, je suis nouveau ici. Comment est ma PP ?!
                    </div>
                    <div class="content-footer">
                        <div class="see-commentaries hidden">
                            <a href="#">Voir les commentaires</a>
                        </div>
                        <div class="date">
                            le 14 janvier 2021 à 14h00
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="public/js/fil.js"></script>
</body>

</html>