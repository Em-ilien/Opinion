<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register9.php");

if (isset($_POST['bouton-validation'])) {

    header ("Location: ../register/register10.php");
}