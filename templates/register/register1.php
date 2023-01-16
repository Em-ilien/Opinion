<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opinion - Inscription</title>
	<link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/register.css">
	<link rel="stylesheet" href="public/css/login.css">
</head>

<body>
	<header class="header">
		<h1 onclick="document.location.href = '.'" class="title">Opinion<span class="dot">.</span></h1>
	</header>
	<div class="form-ctn">
		<form action="?page=register/2" method="post">
			<h1 class="background-title">Inscription</h1>
			<div>
				<h2 class="subtitle">Données personnelles</h2>

				<p class="text-info1">
					En vous inscrivant,
					vous consentez à ce que nous collections les données personnelles suivantes :<br>
				</p>
				<br>
				<p class="text-info2">
					- l'adresse email afin d'assurer votre authentification et de pouvoir vous envoyer des
					informations.<br>
					- le pseudonyme et le nom d'utilisateur, affichés publiquement sur votre profil utilisateur et
					attachés à vos
					publications.<br>
					- votre date de naissance pour nous assurer du respect à nos conditions d'utilisation.<br>
				</p>
				<br>
				<p class="text-info1">
					Nous enregistrons également le contenu que vous publiez,
					susceptible de contenir des données,
					qu'il soit attaché directement à votre profil utilisateur (biographie, avatar...)
					ou à vos publications (posts, avis...).
				</p>

				<input type="submit" class="validation-button" value="Accepter">
			</div>
		</form>
	</div>
</body>

</html>