<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte | Opinion</title>
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/account.css">
</head>

<body>
    <?php include(__DIR__ . '/../header.php'); ?>
    <div class="container">
        <div class="profil">
            <div>
                <h1>Mon profil</h1>
                <div class="fields">
                    <div class="avatar">
                        <label>
                            Avatar
                            <input name="avatar" disabled type="image" src="<?= $user->getAvatarImagePath() ?>" alt="Avatar">
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
            <div>
                <p class="privacy">Ces informations sont publiques. Tout utilisateur peut les consulter sur votre profil
                    et vos publications.</p>
            </div>
        </div>
        <div class="account">
            <div>
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
                            <input disabled type="date" name="birthday" value="<?= $user->getBirthday() ?>">
                        </label>
                        <button class="edit-btn btn"
                            >Modifier</button>
                    </div>
                </div>
            </div>
            <div>
                <p class="privacy">Ces informations sont confidentielles et ne sont partagées à aucun tier.</p>
            </div>
        </div>
    </div>

    <script src="public/js/editing-account-informations.js"></script>
</body>

</html>