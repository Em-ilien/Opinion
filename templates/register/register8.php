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
		<form onsubmit="checkAssentRegisterByAjax(event)">
			<h1 class="background-title">Inscription</h1>
			<div>
				<h2 class="subtitle">Consentements finaux</h2>
				<label class="checkbox-condition-label">
					<input type="checkbox" onclick="refreshSumbitBtnClickability()" id="checkbox1" name="checkbox1"
						class="checkbox-condition" submitability='checked'>
					J'accepte les conditions générales d'utilisation.
				</label>
				<label class="checkbox-condition-label">
					<input type="checkbox" onclick="refreshSumbitBtnClickability()" id="checkbox2" name="checkbox2"
						class="checkbox-condition" submitability='checked'>
					Je concens à ce que les données saisies soient sauvegardées et stockées. Lire la politique de
					confidentialité.
				</label>
				<input type="submit" name="validation-button" class="validation-button disabled"
					value="S'inscrire">
			</div>
		</form>
	</div>

	<script src="public/js/form-submitability.js"></script>
	<script src="public/js/data-form-validity-verification.js"></script>
</body>

</html>