<?php 

require(__DIR__ . "/../../../templates/register/register2.php");

if (isset($_POST['BoutonValidation'])) {

    $_SESSION['Pseudo']=$_POST['EntreeNom'];
    header ("Location: ../register/register3.php");
}
