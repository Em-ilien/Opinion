<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/login.css">
  <link rel="stylesheet" href="public/css/register.css">
</head>

<body>
  <header class="header">
    <h1 class="titre">Opinion<span class="dot">.</span></h1>
  </header>

  <div class="form-ctn">
    <form action="?page=register/8" method="post" class="corps">
      <h1 class="background-title">Inscription</h1>
      <div>
        <h2 class="sous-titre">Consentements finaux</h2>
        <label class="checkbox-condition-label">
          <input type="checkbox" onclick="refreshSumbitBtnClickability();" id="checkbox1" name="checkbox1"
            class="checkbox-condition">
          J'accepte les conditions générales d'utilisation.
        </label>
        <label class="checkbox-condition-label">
          <input type="checkbox" onclick="refreshSumbitBtnClickability();" id="checkbox2" name="checkbox2"
            class="checkbox-condition">
          Je concens à ce que les données saisies soient sauvegardées et stockées. Lire la politique de
          confidentialité.
        </label>
        <input type="submit" id="bouton-validation" name="bouton-validation" class="bouton-validation disabled"
          value="S'inscrire">
      </div>
    </form>

    <script>
      function refreshSumbitBtnClickability() {
        let valueCheckbox1 = document.querySelector("input[name='checkbox1']");
        let valueCheckbox2 = document.querySelector("input[name='checkbox2']");

        if (valueCheckbox1.checked != true)
          return document.querySelector(".bouton-validation").classList.add("disabled");

        if (valueCheckbox2.checked != true)
          return document.querySelector(".bouton-validation").classList.add("disabled");

        document.querySelector(".bouton-validation").classList.remove("disabled");
      }

      let submitBtn = document.querySelector(".bouton-validation");
      submitBtn.addEventListener("click", (e) => {
        if (submitBtn.classList.contains("disabled")) {
          e.preventDefault();
        }
      });
    </script>
</body>

</html>