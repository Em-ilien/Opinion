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
    <link rel="stylesheet" href="public/css/write.css">
</head>

<body>
    <?php include(__DIR__ . '/../header.php'); ?>
    <div class="container">
        <aside class="user-profil" data-user-id="<?= $askedUser->getId() ?>">
            <div>
                <div class="informations">
                    <div class="user-identity">
                        <img src="<?= $askedUser->getAvatarImagePath() ?>" alt="Avatar" class="avatar">
                        <span class="nickname">
                            <?= $askedUser->getNickname() ?>
                        </span>
                        <span class="username">@<?= $askedUser->getUsername() ?></span>
                    </div>
                    <div class="biography">
                        <p>
                            <?= $askedUser->getBiography() ?>
                        </p>
                    </div>
                </div>
                <?php if ($askedUser->getId() == $user->getId()) { ?>
                    <div class="edit-btn-ctn">
                        <a href="?page=account" class="edit-btn">Modifier</a>
                    </div>
                <?php } ?>
            </div>
            <?php if ($askedUser->getId() == $user->getId()) { ?>
                <div class="btn write-btn" onclick="openWritingPostModal(true)">
                    Écrire
                </div>
            <?php } ?>
        </aside>
        <main class="fil scrollable"></main>
    </div>

    <script src="public/js/showing-post.js"></script>
    <script src="public/js/writing.js"></script>
    <script src="public/js/form-submitability.js"></script>
</body>

</html>