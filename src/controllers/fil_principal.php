<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit();
}

$user = $_SESSION['user'];

if (isset($_GET['sortMethod'])) {
    $sortMethod = $_GET['sortMethod'];
} else {
    $sortMethod = 'most-commented';
}

require(__DIR__ . "/../../templates/fil_principal/fil.php");