<?php 
session_start();

require(__DIR__ . "../../../template/register2.php");

if (isset($_POST['BoutonValidation'])) {

    $_SESSION['Pseudo']=$_POST['EntreeNom'];

}