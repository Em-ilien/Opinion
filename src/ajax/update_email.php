<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['email'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing email parameter']));
}

$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die(json_encode(['status' => 'error', 'error' => 'Email invalide']));
}

$user = (new UserDAO)->getUserByEmail($email);

if ($user) {
    die(json_encode(['status' => 'error', 'error' => 'Email déjà utilisée par un autre utilisateur']));
}

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre adresse email']));
}

$user = $_SESSION['user'];
$user->setEmail($_POST['email']);

(new UserDAO)->update($user);

$_SESSION['user'] = $user;

echo json_encode(['status' => 'success']);