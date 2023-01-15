<?php

if (!isset($_SESSION['user'])) {
    header('Location: ?page=login');
    exit();
}

$user = $_SESSION['user'];
$userId = $user->getId();

require(__DIR__ . "/../../templates/fil_principal/fil.php");