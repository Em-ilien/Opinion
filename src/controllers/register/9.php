<?php

if (isset($_POST['validation-button'])) {
    header("Location: ?page=register/10");
    exit();
}

require(__DIR__ . "/../../../templates/register/register9.php");