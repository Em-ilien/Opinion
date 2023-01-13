<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register6.php");

if (isset($_POST['bouton-validation'])) {

    $_SESSION['photo']=$_POST['photo'];
    header ("Location: ../register/register7.php");
}