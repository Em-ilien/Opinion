<?php 

if (isset($_POST['bouton-validation'])) {
    $_SESSION['email'] = $_POST['email'];
    header("Location: ?page=register/5");
    exit();
}

require(__DIR__ . "/../../../templates/register/register4.php");