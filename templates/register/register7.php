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

  <div class="form-ctn">
    <form action="?page=register/7" method="post" class="corps">
      <h1 class="background-title">Inscription</h1>
      <div>
        <label>
          Qui êtes-vous en quelques mots ?
          <input type="text" name="desc" class="input2" placeholder=" Pâtissier depuis 8 ans, j'ai ..."><br>
        </label>
        <p class="text-info1">
          Cette biographie sera affichée publiquement sur votre profil utilisateur. <br>
          Elle permettra aux autres internautes d'en savoir un peu plus sur vous.
        </p>
        <input type="submit" name="bouton-validation" class="bouton-validation" value="Passer">
      </div>
    </form>
</body>

</html>