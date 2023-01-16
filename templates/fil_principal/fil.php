<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/user.css">
    <link rel="stylesheet" href="public/css/fil.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/write.css">
    <title>Opinion.</title>
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
                <span class="user-icon"><img id="user-img" src="public/img/default_avatar_user.png"
                        alt="icône utilisateur"></span>
                <span id="user-triangle-menu"></span>
            </div>
        </div>
    </header>
    <div class="container">
        <main class="fil">
            <div class="post">
                <aside class="user-identity" data-user-id="<?= $user->getId() ?>">
                    <img src="<?= $user->getAvatarImagePath() ?>" alt="Avatar" class="avatar">
                    <span class="nickname">
                        <?= $user->getNickname() ?>
                    </span>
                    <span class="username">@<?= $user->getUsername() ?></span>
                </aside>
                <main>
                    <div class="content">
                        <p>Bonjour à tous, je suis nouveau ici. Comment est ma PP ?!</p>
                    </div>
                    <div class="footer">
                        <div class="see-comments-btn-ctn">
                            <button class="btn see-comments-btn">Voir les commentaires</button>
                        </div>
                        <span class="date">
                            le 14 janvier 2021
                        </span>
                    </div>
                </main>
            </div>

            <div class="post">
                <aside class="user-identity">
                    <img src="<?= $user->getAvatarImagePath() ?>" alt="Avatar" class="avatar">
                    <span class="nickname">
                        <?= $user->getNickname() ?>
                    </span>
                    <span class="username">@<?= $user->getUsername() ?></span>
                </aside>
                <main>
                    <div class="content">
                        <p>Hier je lisais un rapport dans le Monde qui disait que l'immigration était le problème de
                            toute conséquence du déclin du pays : inflation, racisme, islmamisation, dégradation de la
                            culture et des traditions... Il faut peut-être penser à réparer le problème à la source.

                            J'en parlais à ma famille et ils ne comprennent pas trop pourquoi l'immigration est un
                            problème.

                            En tout cas, moi, je saurais qui voter à la présidentielle en 2027. Et vous, que ferez-vous
                            ?</p>
                    </div>
                    <div class="footer">
                        <div class="see-comments-btn-ctn">
                            <button class="btn see-comments-btn">Voir les commentaires</button>
                        </div>
                        <span class="date">
                            le 14 janvier 2021
                        </span>
                    </div>
                </main>
            </div>

            <div class="post">
                <aside class="user-identity">
                    <img src="<?= $user->getAvatarImagePath() ?>" alt="Avatar" class="avatar">
                    <span class="nickname">
                        EmmanuelPatron
                    </span>
                    <span class="username">@EmmanuelPatron</span>
                </aside>
                <main>
                    <div class="content">
                        <p>Bonjour à tous, je suis nouveau ici. Comment est ma PP ?!</p>
                    </div>
                    <div class="footer">
                        <div class="see-comments-btn-ctn">
                            <button class="btn see-comments-btn">Voir les commentaires</button>
                        </div>
                        <span class="date">
                            le 14 janvier 2021
                        </span>
                    </div>
                </main>
            </div>
        </main>
        <div class="container-right">
            <div>
                <div class="btn write-btn" onclick="openWritingPostModal(false)">
                    Écrire
                </div>
                <div class="sort">
                    <label>
                        <input type="radio" name="sort" id="most-commented" checked>
                        Les + commentés
                    </label>
                    <label>
                        <input type="radio" name="sort" id="lastest">
                        Les + récents
                    </label>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/showing-post.js"></script>
    <script src="public/js/writing.js"></script>
    <script src="public/js/form-submitability.js"></script>
</body>

</html>