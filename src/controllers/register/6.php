<?php

if (isset($_POST['bouton-validation'])) {
    $_SESSION['photo'] = $_POST['photo'];
    header("Location: ?page=register/7");
    exit();
}

require(__DIR__ . "/../../../templates/register/register6.php");