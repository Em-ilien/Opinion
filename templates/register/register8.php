

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Opinion - Inscription</title>
  <link rel="stylesheet" href="../../../public/css/register.css">
  <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/comfortaa" rel="stylesheet">

                
                
</head>
<body>
  <header class="header">
    <h1 Class="titre">Opinion.</h1>
  </header>

  <form action="../register/register8.php" method="post" class="corps">
      <h2 class="sous-titre">Consentements finaux</h2>
      <div class="condition">
      <input type="checkbox" onclick="fctControleCheckboxCocheeOuNon();" id="checkbox1" name="checkbox1" class="checkbox-condition">
      <p>J’accepte les conditions générales d’utilisation.</p><br>

      </div>
      <div class="condition">
      <input type="checkbox" onclick="fctControleCheckboxCocheeOuNon();" id="checkbox2" name="checkbox2"class="checkbox-condition">
      <p>Je concens à ce que les données saisies soient sauvegardées et stockées. 
          Lire la politique de confidentialité.</p><br>
      </div>


      <input type="submit" id="bouton-validation" name="bouton-validation" class="bouton-validation disabled" value="S'inscrire">

  </form>
<script type="text/javascript">
			function recupValeurElement(IdElement)
			{
				if (document.getElementById)
				{
					return document.getElementById(IdElement);
				}
				else if (document.all)
				{
					return document.all[IdElement];
				}
			}
			function fctControleCheckboxCocheeOuNon()
			{
				let valueCheckbox1 = document.querySelector("#checkbox1");
				let valueCheckbox2 = document.querySelector("#checkbox2");

        if(valueCheckbox1.checked==true && valueCheckbox2.checked==true){
          document.querySelector(".bouton-validation").classList.remove("disabled");
        }else{
          document.querySelector(".bouton-validation").classList.add("disabled");
        }
				
			}
		</script>
</body>
</html>