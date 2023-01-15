<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['nickname'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing nickname parameter']));
}

$nickname = $_POST['nickname'];

if (!preg_match('/^[a-zA-Z0-9_.+-@àâäéèêëîïôöùûüç ]+$/', $nickname)) {
    die(json_encode(['status' => 'error', 'error' => "Votre pseudonyme contient des caractères invalides"]));
}

if (mb_strlen($nickname) > 20) {
    die(json_encode(['status' => 'error', 'error' => 'Votre pseudonyme est trop long']));
}

if (mb_strlen($nickname) < 3) {
    die(json_encode(['status' => 'error', 'error' => 'Votre pseudonyme est trop court']));
}

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre pseudonyme']));
}

$user = $_SESSION['user'];
$user->setNickname($nickname);

(new UserDAO)->update($user);

$_SESSION['user'] = $user;

echo json_encode(['status' => 'success']);