<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register3.php");

if (isset($_POST['BoutonValidation'])) {

    $_SESSION['UserName']=$_POST['EntreeUserName'];
    header ("Location: ../register/register4.php");
}