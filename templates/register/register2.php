<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
	<title>Opinion - Inscription</title>
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="stylesheet" href="public/css/login.css">
	<link rel="stylesheet" href="public/css/register.css">
</head>

<body>
	<header class="header">
		<h1 onclick="document.location.href = 'index.php'" class="title">Opinion<span class="dot">.</span></h1>
	</header>

	<div class="form-ctn">
		<form onsubmit="checkNicknameRegisterByAjax(event)">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					Comment vous appelez-vous ?
					<input type="text" name="nickname" class="input" placeholder="Prénom ou pseudonyme" maxlength="20" submitability="length" length-submitability="2" onkeyup="refreshSumbitBtnClickability(); reviseNicknameInputDataToBeCorrect(this)"><br>
				</label>

				<p class="text-info1">
					Vous êtes libre de choisir ou non un pseudonyme.
					Il sera affiché publiquement sur votre profil et sera attaché au contenu que vous publierez.<br>
				</p>

				<input type="submit" name="validation-button" class="validation-button disabled" value="Continuer">
			</div>
		</form>
	</div>

	<script src="public/js/form-submitability.js"></script>
	<script src="public/js/data-form-validity-verification.js"></script>
	<script>
		function reviseNicknameInputDataToBeCorrect(input) {
			let regex = /[a-zA-Z0-9_.+-@àâäéèêëîïôöùûüç ]/g;

			if (!regex.test(input.value))
				input.value = input.value.replace(/[^a-zA-Z0-9_.+-@àâäéèêëîïôöùûüç ]/g, "");
		}
	</script>
</body>

</html>