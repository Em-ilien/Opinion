<?php 

if (isset($_POST['validation-button'])) {
    header("Location: index.php?page=user");
    exit();
}

require(__DIR__ . "/../../../templates/register/register10.php");