<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php?page=login');
    exit();
}

require_once(__DIR__ . '/../daos/UserDAO.php');

$user = $_SESSION['user'];

if (isset($_GET['userId'])) {
    $askedUser = (new UserDAO)->getUserById($_GET['userId']);
} else {
    $askedUser = (new UserDAO)->getUserById($user->getId());
}

if ($askedUser == null) {
    header('Location: index.php?page=user');
    exit();
}

require(__DIR__ . "/../../templates/user/user.php");