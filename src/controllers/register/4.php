<?php 

if (isset($_POST['bouton-validation'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: ?page=register/5");
}

require(__DIR__ . "/../../../templates/register/register4.php");