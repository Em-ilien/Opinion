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
    <?php include(__DIR__ . '/../header.php'); ?>
    <div class="container scrollable">
        <main class="fil"></main>
        <div class="container-right">
            <div>
                <div class="btn write-btn" onclick="openWritingPostModal(false)">
                    Écrire
                </div>
                <div class="sort">
                    <label>
                        <input type="radio" name="sort" value="most-commented" <?= $sortMethod == "most-commented" ? " checked" : "" ?>>
                        Les + commentés
                    </label>
                    <label>
                        <input type="radio" name="sort" value="lastest" <?= $sortMethod == "lastest" ? " checked" : "" ?>>
                        Les + récents
                    </label>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/showing-post.js"></script>
    <script src="public/js/writing.js"></script>
    <script src="public/js/changing-sort-method.js"></script>
    <script src="public/js/form-submitability.js"></script>
</body>

</html>