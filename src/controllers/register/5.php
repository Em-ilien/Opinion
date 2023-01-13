<?php

if (isset($_POST['bouton-validation'])) {
    $_SESSION['birthday'] = $_POST['birthday'];
    header("Location: ?page=register/6");
    exit();
}

require(__DIR__ . "/../../../templates/register/register5.php");