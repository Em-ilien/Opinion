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

  <form action="?page=register/5" method="post" class="corps">
    <label>
      Quand êtes-vous venu au monde ?
      <input type="date" name="birthday" class="input" placeholder="JJ / MM / AAAA"><br>
    </label>
    <p class="text-info1">
      Votre date de naissance nous permettra de déterminer votre âge afin de vérifier que vous respectez
      le droit national en vigueur.
    </p>

    <input type="submit" name="bouton-validation" class="bouton-validation" value="Continuer">
  </form>
</body>

</html>