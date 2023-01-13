

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="public/css/register.css">
  <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">

                
                
</head>
<body>
  
  <header class="header">
    <h1 Class="titre">Opinion.</h1>
  </header>
  <form action="src/controllers/register/register2.php" method="post" Class="corps">
    <h2 class="sous-titre">Données personnelles</h2>

    <p class="text-info1">
      En vous inscrivant, 
      vous consentez à ce que nous collections les données personnelles suivantes :<br>
    </p><br>
    
    <p class="text-info2">
      - l'adresse email afin d'assurer votre authentification et de pouvoir vous envoyer des informations.<br>
      - le pseudonyme et le nom d'utilisateur, affichés publiquement sur votre profil utilisateur et attachés à vos publications.<br>
      - votre date de naissance pour nous assurer du respect à nos conditions d’utilisation.<br>
    </p><br>

    <p class="text-info1">
      Nous enregistrons également le contenu que vous publiez, 
      susceptible de contenir des données, 
      qu'il soit attaché directement à votre profil utilisateur (biographie, avatar...) 
      ou à vos publications (posts, avis...).
    </p>

    <input type="submit" class="bouton-validation" name="button-next"  value="Accepter">
  </form>
  
  

</body>
</html>