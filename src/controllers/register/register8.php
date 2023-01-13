<?php 
session_start();

require(__DIR__ . "/../../../templates/register/register8.php");

if (isset($_POST['checkbox1'],$_POST['checkbox2'])) {

    header ("Location: ../register/register9.php");
}

