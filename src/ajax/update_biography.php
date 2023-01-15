<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['biography'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing biography parameter']));
}

$biography = $_POST['biography'];

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre biographie']));
}

$user = $_SESSION['user'];
$user->setBiography($biography);

(new UserDAO)->update($user);

$_SESSION['user'] = $user;

echo json_encode(['status' => 'success']);