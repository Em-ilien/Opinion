<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

session_start();

if (isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Already logged in']));
}

if (!isset($_POST['identifier']) || !isset($_POST['password'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing identifier or password']));
}

$password = $_POST['password'];

$userDAO = new UserDAO;

if (filter_var($_POST['identifier'], FILTER_VALIDATE_EMAIL)) {
    $email = $_POST['identifier'];

    $user = $userDAO->getUserByEmail($email);
} else {
    $username = $_POST['identifier'];

    $user = $userDAO->getUserByUsername($username);
}

if (!$user) {
    die(json_encode(['status' => 'error', 'error' => 'Identifiant ou mot de passe invalide']));
}

$dbPassword = $userDAO->getPassword($user);

if (!password_verify($password, $dbPassword)) {
    die(json_encode(['status' => 'error', 'error' => 'Identifiant ou mot de passe invalide']));
}

$_SESSION['user'] = $user;

echo json_encode(['status' => 'success']);