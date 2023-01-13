<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register5.php");

if (isset($_POST['bouton-validation'])) {

    $_SESSION['birthday']=$_POST['birthday'];

    header ("Location: ../register/register6.php");
}