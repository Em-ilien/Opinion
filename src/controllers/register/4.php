<?php 

if (!isset($_SESSION['nickname'])) {
    header("Location: index.php?page=register/2");
    exit;
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php?page=register/3");
    exit;
}

require(__DIR__ . "/../../../templates/register/register4.php");