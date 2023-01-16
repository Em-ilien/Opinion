<?php 

if (!isset($_SESSION['nickname'])) {
    header("Location: index.php?page=register/2");
    exit;
}

require(__DIR__ . "/../../../templates/register/register3.php");
