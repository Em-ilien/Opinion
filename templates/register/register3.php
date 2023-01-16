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

		<form onsubmit="checkUsernameRegisterByAjax(event)">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					Choisissez un nom d'utilisateur unique.
					<input type="text" name="username" class="input" placeholder="@nom d'utilisateur" maxlength="15" submitability="length" length-submitability="4" onkeyup="refreshSumbitBtnClickability(); reviseUsernameInputDataToBeCorrect(this)"><br>
				</label>

				<p class="text-info1">
					Ce nom est unique : aucun autre utilisateur ne pourra l'utiliser.
					Il sera affiché publiquement sur votre profil et sera attaché au contenu que vous publierez.<br>
				</p>

				<input type="submit" name="validation-button" class="validation-button disabled" value="Continuer">
			</div>
		</form>
	</div>

	<script src="public/js/form-submitability.js"></script>
	<script src="public/js/data-form-validity-verification.js"></script>
	<script>
		function reviseUsernameInputDataToBeCorrect(input) {
			if (input.value.charAt(0) != '@')
				input.value = '@' + input.value;

			if (!/^[a-zA-Z0-9_@]*$/.test(input.value))
				input.value = input.value.replace(/[^a-zA-Z0-9_@]/g, '');
		}
	</script>
</body>

</html>