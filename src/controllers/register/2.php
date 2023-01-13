<?php

if (isset($_POST['bouton-validation'])) {
    $_SESSION['nickname'] = $_POST['nickname'];
    header("Location: ?page=register/3");
    exit();
}

require(__DIR__ . "/../../../templates/register/register2.php");
