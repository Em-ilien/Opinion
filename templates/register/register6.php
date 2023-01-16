<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opinion - Inscription</title>
	<link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/login.css">
	<link rel="stylesheet" href="public/css/register.css">
</head>

<body>
	<header class="header">
		<h1 onclick="document.location.href = 'index.php'" class="title">Opinion<span class="dot">.</span></h1>
	</header>

	<div class="form-ctn">
		<form action="index.php?page=register/6" method="post" enctype="multipart/form-data">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					À quoi ressemblez-vous ?
					<input type="file" name="avatar" class="import" /><br>
				</label>
				<p class="text-info1">
					Vous êtes libre d'utiliser une photo de vous, un logo, un avatar... <br>
					Cette image sera affichée publiquement sur votre profil utilisateur et attachée au contenu que vous
					publierez.
					Elle permettra aux autres internautes de vous identifier. <br>
					Veillez à respecter le droit d'auteur et le droit à l'image.
				</p>
				<input type="submit" name="validation-button" class="validation-button" value="Passer">
			</div>
		</form>
	</div>
</body>

</html>