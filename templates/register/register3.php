<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/login.css">
  <link rel="stylesheet" href="public/css/register.css">
  <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">
</head>

<body>
  <header class="header">
    <h1 class="titre">Opinion<span class="dot">.</span></h1>
  </header>

  <form action="?page=register/3" method="post" class="corps">
  <label>
    Choisissez un nom d'utilisateur unique.
    <input type="text" name="username" class="input" placeholder="@nom d'utilisateur"><br>
  </label>

    <p class="text-info1">
      Ce nom est unique : aucun autre utilisateur ne pourra l'utiliser.
      Il sera affiché publiquement sur votre profil et sera attaché au contenu que vous publierez.<br>
    </p>

    <input type="submit" name="bouton-validation" class="bouton-validation" value="Continuer">

  </form>

</body>

</html>