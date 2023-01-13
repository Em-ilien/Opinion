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

  <form action="?page=register/4" method="post" class="corps">
    <label>
      Adresse e-mail
      <input type="text" name="username" class="input" placeholder="Exemple@gmail.com"><br>
    </label>

    <label>
      Mot de passe
      <input type="text" name="password" class="input" placeholder="*************"><br>
    </label>

    <p class="text-info1">
      Votre adresse e-mail et votre mot de passe constitueront les deux identifiants permettant de vous authentifier.
      <br>
      Nous sommes susceptibles de vous adresser des courriels afin de vous informer des modifications de nos conditions
      ou d'autres informations importantes
      (comme par exemple pour vous notifier d'évènements importants liés à la sécurité de votre compte).<br>
    </p>

    <input type="submit" name="bouton-validation" class="bouton-validation" value="Continuer">

  </form>

</body>

</html>