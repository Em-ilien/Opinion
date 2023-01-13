<?php

if (isset($_POST['checkbox1']) && isset($_POST['checkbox2'])) {
    header("Location: ?page=register/9");
    exit();
}

require(__DIR__ . "/../../../templates/register/register8.php");
