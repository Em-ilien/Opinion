<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing email or password parameter']));
}

$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die(json_encode(['status' => 'error', 'error' => 'Email invalide']));
}

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

$user = (new UserDAO)->getUserByEmail($email);

if ($user) {
    die(json_encode(['status' => 'error', 'error' => 'Email déjà utilisée par un autre utilisateur']));
}

session_start();

$_SESSION['email'] = $email;
$_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);

echo json_encode(['status' => 'success']);