<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register7.php");

if (isset($_POST['bouton-validation'])) {

    $_SESSION['desc']=$_POST['desc'];
    header ("Location: ../register/register8.php");
}