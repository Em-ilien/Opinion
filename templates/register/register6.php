<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/login.css">
  <link rel="stylesheet" href="public/css/register.css">
</head>
<body>
  <header class="header">
    <h1 class="titre">Opinion<span class="dot">.</span></h1>
  </header>
  <form action="?page=register/6" method="post" class="corps">
    <h2 class="sous-titre">À quoi ressemble-vous ?</h2>
    <label>
      À quoi ressemblez-vous ? 
      <input type="file" name="photo" class="import" /><br>
    </label>
    <p class="text-info1">
      Vous êtes libre d'utiliser une photo de vous, un logo, un avatar... <br>
      Cette image sera affichée publiquement sur votre profil utilisateur et attachée au contenu que vous publierez.
      Elle permettra aux autres internautes de vous identifier. <br>
      Veillez à respecter le droit d'auteur et le droit à l'image.
    </p>
    <input type="submit" name="bouton-validation" class="bouton-validation" value="Passer">
  </form>
</body>
</html>