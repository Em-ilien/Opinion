
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/register.css">
  <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">

                
                
</head>
<body>
  <header class="header">
    <h1 class="titre">Opinion<span class="dot">.</span></h1>
  </header>
    <form action="../src/controllers/register/register2.php" class="corps">
    <h2 class="sous-titre">Comment vous appelez-vous ?</h2>

    <input type="text" name="EntreeNom" class="input" placeholder="   Prénom ou Pseudonyme"><br> 

    <p class="text-info1">
    Vous êtes libre de choisir ou non un pseudonyme.
    Il sera affiché publiquement sur votre profil et sera attaché au contenu que vous publierez.<br>
    </p> 
 
    <input type="submit" name="BoutonValidation" class="BoutonValidation"  value="Accepter">

    </form>
  


</body>
</html>