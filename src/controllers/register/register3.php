<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register3.php");

if (isset($_POST['bouton-validation'])) {

    $_SESSION['-user-name']=$_POST['entree-user-name'];
    header ("Location: ../register/register4.php");
}