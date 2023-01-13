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

  <form action="?page=register/8" method="post" class="corps">
    <h2 class="sous-titre">Consentements finaux</h2>
    <div class="condition">
      <label>
        <input type="checkbox" onclick="fctControleCheckboxCocheeOuNon();" id="checkbox1" name="checkbox1"
          class="checkbox-condition">
        J'accepte les conditions générales d'utilisation.
      </label>
    </div>
    <div class="condition">
      <label>
        <input type="checkbox" onclick="fctControleCheckboxCocheeOuNon();" id="checkbox2" name="checkbox2"
        class="checkbox-condition">
        Je concens à ce que les données saisies soient sauvegardées et stockées. Lire la politique de confidentialité.
      </label>
    </div>
    <input type="submit" id="bouton-validation" name="bouton-validation" class="bouton-validation disabled"
      value="S'inscrire">
  </form>
  <script type="text/javascript">
    function recupValeurElement(IdElement) {
      if (document.getElementById) {
        return document.getElementById(IdElement);
      }
      else if (document.all) {
        return document.all[IdElement];
      }
    }
    function fctControleCheckboxCocheeOuNon() {
      let valueCheckbox1 = document.querySelector("#checkbox1");
      let valueCheckbox2 = document.querySelector("#checkbox2");
      if (valueCheckbox1.checked == true && valueCheckbox2.checked == true) {
        document.querySelector(".bouton-validation").classList.remove("disabled");
      } else {
        document.querySelector(".bouton-validation").classList.add("disabled");
      }

    }
  </script>
</body>

</html>