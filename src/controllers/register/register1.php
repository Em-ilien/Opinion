<?php

function Suivant() {
    header ("Location : /src/controllers/register/register2.php");
}

if (isset($_POST['BoutonSuite'])) {
    Suivant();
}
require(__DIR__ . "/../../../templates/register/register1.php");

