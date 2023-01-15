<?php

if (!isset($_SESSION['nickname'])) {
    header("Location: ?page=register/2");
    exit;
}

if (!isset($_SESSION['username'])) {
    header("Location: ?page=register/3");
    exit;
}

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header("Location: ?page=register/4");
    exit;
}

require(__DIR__ . "/../../../templates/register/register5.php");