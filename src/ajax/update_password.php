<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['password'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing password parameter']));
}

$password = $_POST['password'];

if (strlen($password) < 8) {
    die(json_encode(['status' => 'error', 'error' => 'Mot de passe trop court']));
}

if (!preg_match('/[0-9]/', $password)) {
    die(json_encode(['status' => 'error', 'error' => 'Mot de passe doit contenir au moins un chiffre']));
}

if (!preg_match('/[A-Z]/', $password)) {
    die(json_encode(['status' => 'error', 'error' => 'Mot de passe doit contenir au moins une lettre majuscule']));
}

if (!preg_match('/[a-z]/', $password)) {
    die(json_encode(['status' => 'error', 'error' => 'Mot de passe doit contenir au moins une lettre minuscule']));
}

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre mot de passe']));
}

$user = $_SESSION['user'];

(new UserDAO)->updatePassword($user, password_hash($password, PASSWORD_DEFAULT));

echo json_encode(['status' => 'success']);