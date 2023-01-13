<?php

if (isset($_POST['button-next'])) {
    header("Location: ?page=register/register2");
    exit();
}

require(__DIR__ . "/../../../templates/register/register1.php");