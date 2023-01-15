<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['username'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing username parameter']));
}

$username = $_POST['username'];
$username = str_replace('@', '', $username);
if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
    die(json_encode(['status' => 'error', 'error' => "Nom d'utilisateur contient des caractères invalides"]));
}
if (strlen($username) > 15) {
    die(json_encode(['status' => 'error', 'error' => 'Nom d\'utilisateur trop long']));
}
if (strlen($username) < 3) {
    die(json_encode(['status' => 'error', 'error' => 'Nom d\'utilisateur trop court']));
}

$user = (new UserDAO)->getUserByUsername($username);

if ($user) {
    die(json_encode(['status' => 'error', 'error' => 'Nom d\'utilisateur déjà utilisé par un autre utilisateur']));
}

session_start();

$_SESSION['username'] = $username;

echo json_encode(['status' => 'success']);