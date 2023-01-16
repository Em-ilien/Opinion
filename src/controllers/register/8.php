<?php

if (!isset($_SESSION['nickname'])) {
    header("Location: index.php?page=register/2");
    exit;
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php?page=register/3");
    exit;
}

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header("Location: index.php?page=register/4");
    exit;
}

if (!isset($_SESSION['birthday'])) {
    header("Location: index.php?page=register/5");
    exit;
}

require(__DIR__ . "/../../../templates/register/register8.php");
