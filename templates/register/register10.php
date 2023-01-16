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
		<h1 onclick="document.location.href = '.'" class="title">Opinion<span class="dot">.</span></h1>
	</header>
	<form action="?page=user" method="post">
		<h1 class="subtitle">Bienvenue sur Opinion</h1>
		<p class="text-info3">
			Vous pouvez dès à présent publier un post !
		</p>
		<input type="submit" class="validation-button" name="button-next" value="Écrire">
	</form>
</body>

</html>