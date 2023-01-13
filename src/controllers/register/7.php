<?php 

if (isset($_POST['bouton-validation'])) {
    $_SESSION['desc'] = $_POST['desc'];
    header("Location: ?page=register/8");
    exit();
}

require(__DIR__ . "/../../../templates/register/register7.php");