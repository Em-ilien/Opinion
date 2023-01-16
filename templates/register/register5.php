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
		<form onsubmit="checkBirthdayRegisterByAjax(event)">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					Quand êtes-vous venu au monde ?
					<input type="date" name="birthday" class="input" placeholder="JJ / MM / AAAA" submitability="filled" onkeyup="refreshSumbitBtnClickability()"><br>
				</label>
				<p class="text-info1">
					Votre date de naissance nous permettra de déterminer votre âge afin de vérifier que vous respectez
					le droit national en vigueur.
				</p>
				<input type="submit" name="validation-button" class="validation-button disabled" value="Continuer">
			</div>
		</form>
	</div>

	<script src="public/js/form-submitability.js"></script>
	<script src="public/js/data-form-validity-verification.js"></script>
</body>

</html>