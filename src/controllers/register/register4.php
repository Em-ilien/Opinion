<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register4.php");

if (isset($_POST['bouton-validation'])) {

    $_SESSION['mail']=$_POST['mail'];
    $_SESSION['password']=$_POST['password'];
    header ("Location: ../register/register5.php");
}