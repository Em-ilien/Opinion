<?php 

require(__DIR__ . "/../../../templates/register2.php");

if (isset($_POST['BoutonValidation'])) {

    $_SESSION['Pseudo']=$_POST['EntreeNom'];

}
