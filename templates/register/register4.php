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

		<form onsubmit="checkEmailAndPasswordRegisterByAjax(event)">
			<h1 class="background-title">Inscription</h1>
			<div>
				<label>
					Adresse e-mail
					<input type="text" name="email" class="input" placeholder="Exemple@mail.com" submitability="length" length-submitability="6" onkeyup="refreshSumbitBtnClickability(); reviseEmailInputDataToBeCorrect(this)"><br>
				</label>

				<label>
					Mot de passe
					<input type="password" name="password" class="input" placeholder="*************" submitability="length" length-submitability="8" onkeyup="refreshSumbitBtnClickability(); revisePasswordInputDataToBeCorrect(this)"><br>
				</label>

				<p class="text-info1">
					Votre adresse e-mail et votre mot de passe constitueront les deux identifiants permettant de vous
					authentifier.
					<br>
					Nous sommes susceptibles de vous adresser des courriels afin de vous informer des modifications de
					nos
					conditions
					ou d'autres informations importantes
					(comme par exemple pour vous notifier d'évènements importants liés à la sécurité de votre
					compte).<br>
				</p>

				<input type="submit" name="validation-button" class="validation-button disabled" value="Continuer">
			</div>
		</form>
	</div>

	<script src="public/js/form-submitability.js"></script>
	<script src="public/js/data-form-validity-verification.js"></script>
	<script>
		function reviseEmailInputDataToBeCorrect(input) {
			let regex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

			if (!regex.test(input.value))
				input.value = input.value.replace(/[^a-zA-Z0-9_.+-@]/g, "");
		}

		function revisePasswordInputDataToBeCorrect(input) {
			let correctChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:<>?";

			if (input.value == "")
				return;

			if (!correctChars.includes(input.value[input.value.length - 1])) {
				window.alert("Le mot de passe ne peut pas contenir le caractère '" + input.value[input.value.length - 1] + "'");
				input.value = input.value.slice(0, -1);
			}
		}
	</script>
</body>

</html>