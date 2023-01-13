<?php 

if (isset($_POST['bouton-validation'])) {
    header("Location: ?page=user");
    exit();
}

require(__DIR__ . "/../../../templates/register/register10.php");