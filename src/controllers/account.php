<?php

if (!isset($_SESSION['user'])) {
    header('Location: ?page=login');
    exit();
}

require_once(__DIR__ . '/../daos/UserDAO.php');

$user = $_SESSION['user'];

require(__DIR__ . "/../../templates/account/account.php");