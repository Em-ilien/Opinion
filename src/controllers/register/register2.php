<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register2.php");

if (isset($_POST['bouton-validation'])) {
    $_SESSION['Pseudo']=$_POST['entree-nom'];
    header("Location: ../register/register3.php");
}