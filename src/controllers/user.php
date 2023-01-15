<?php

if (!isset($_SESSION['user'])) {
    header('Location: ?page=login');
    exit();
}

require_once(__DIR__ . '/../daos/UserDAO.php');

//get complete class
$user = $_SESSION['user'];
$userId = $user->getId();

if (isset($_GET['userId'])) {
    $askedUserId = $_GET['userId'];
} else {
    $askedUserId = $userId;
}

$askedUser = (new UserDAO)->getUserById($askedUserId);

require(__DIR__ . "/../../templates/user/user.php");