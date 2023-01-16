<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinion</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fil.css">
    <link rel="stylesheet" href="public/css/header.css">
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
                <li><a href="?page=user">Profil</a></li>
                <li><a href="?page=logout">Déconnexion</a></li> <!-- TODO: supprimer le lien et ouvrir une popup avec du JS -->
            </ul>
            <div class="search-bar-header">
                <input type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="user-menu">
                <!-- TODO: change default avatar to current user avatar, if exists -->
                <span class="user-icon"><img id="user-img" src="public/img/avatars/user-0.png" alt="icône utilisateur"></span>
                <span id="user-triangle-menu"></span>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="fil">
            <div class="post">
                <div class="profile">
                    <div class="profile-img">
                        <img src="public/img//avatars/default_avatar_user.png" alt="icône utilisateur">
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
                        <img src="public/img//avatars/default_avatar_user.png" alt="icône utilisateur">
                    </div>
                    <div class="profile-name">
                        <h3>Emmanuel Patron</h3>
                    </div>
                </div>
                <div class="content" onmouseover="setCommentariesVisible(this)" onmouseout="setCommentariesHidden(this)">
                    <div class="message">
                        Hier je lisais un rapport dans le Monde qui disait que l’immigration était le problème de toute conséquence du déclin du pays : inflation, racisme, islmamisation, dégradation de la culture et des traditions... Il faut peut-être penser à réparer le problème à la source.

                        J’en parlais à ma famille et ils ne comprennent pas trop pourquoi l’immigration est un problème.

                        En tout cas, moi, je saurais qui voter à la présidentielle en 2027. Et vous, que ferez-vous ?
                    </div>
                    <div class="content-footer">
                        <div class="see-commentaries hidden">
                            <a href="#">Voir les commentaires</a>
                        </div>
                        <div class="date">
                            le 14 janvier 2021 à 16h00
                        </div>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="profile">
                    <div class="profile-img">
                        <img src="public/img//avatars/default_avatar_user.png" alt="icône utilisateur">
                    </div>
                    <div class="profile-name">
                        <h3>Emmanuel Patron</h3>
                    </div>
                </div>
                <div class="content" onmouseover="setCommentariesVisible(this)" onmouseout="setCommentariesHidden(this)">
                    <div class="message">
                        Vous êtes vraiment tous des gros fdp
                    </div>
                    <div class="content-footer">
                        <div class="see-commentaries hidden">
                            <a href="#">Voir les commentaires</a>
                        </div>
                        <div class="date">
                            le 14 janvier 2021 à 16h00
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-right">
            <div class="btn">
                Écrire
            </div>
            <div class="tri">
                <div class="tri-commentated">
                    <input type="radio" name="tri" id="commentated">
                    <label for="commentated">Les + commentés</label>
                </div>
                <div class="tri-recent">
                    <input type="radio" name="tri" id="recent">
                    <label for="recent">Les + récents</label>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/fil.js"></script>
</body>
</html>