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
		<form action="index.php?page=register/10" method="post">
			<h1 class="background-title">Bienvenue</h1>
			<div>
				<h2 class="subtitle">Inscription réussie</h2>
				<p class="text-info1">
					Votre inscription a été validée.
					Vous pouvez à tout moment demander à supprimer votre compte et vos données personnelles en envoyant
					un
					courriel à
					Emilien.Cosson.Etu@univ-lemans.fr et en justifiant de votre identité.<br>
				</p>
				<input type="submit" class="validation-button" name="button-next" value="Découvrir Opinion">
			</div>
		</form>
	</div>
</body>

</html>