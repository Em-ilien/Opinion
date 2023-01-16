<header id="header">
    <div class="logo-header">
        <a href=".">
            <h1 class="logo">Opinion<span class="dot">.</span></h1>
        </a>
    </div>
    <div class="menu-header">
        <ul>
            <li><a href=".">Accueil</a></li>
            <li><a href="?page=user">Mon profil</a></li>
            <li><a href="?page=account">Mon compte</a></li>
            <li><a href="?page=logout">Déconnexion</a></li>
            <!-- TODO: supprimer le lien et ouvrir une popup avec du JS -->
        </ul>
        <div class="search-bar-header">
            <input type="text" name="search" placeholder="Rechercher" onkeyup="search(event)">
        </div>
        <div class="user-menu">
            <!-- TODO: change default avatar to current user avatar, if exists -->
            <span class="user-icon"><img id="user-img" src="<?= $user->getAvatarImagePath() ?>"
                    alt="icône utilisateur"></span>
            <span id="user-triangle-menu"></span>
        </div>
    </div>
</header>

<script src="public/js/searching-user.js"></script>