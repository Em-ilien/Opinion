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

	<div class="form-ctn">
		<form action="?page=register/7" method="post">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					Qui êtes-vous en quelques mots ?
					<textarea name="biography" class="input2" rows="6" placeholder="Pâtissier depuis 8 ans, j’ai à coeur de défendre la tradition et le savoir faire français."></textarea>
					<!-- <input type="text" name="desc" class="input2"><br> -->
				</label>
				<p class="text-info1">
					Cette biographie sera affichée publiquement sur votre profil utilisateur. <br>
					Elle permettra aux autres internautes d'en savoir un peu plus sur vous.
				</p>
				<input type="submit" name="validation-button" class="validation-button" value="Passer">
			</div>
		</form>
	</div>
</body>

</html>