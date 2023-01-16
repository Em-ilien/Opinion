<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_GET["query"]))
    die(json_encode(['status' => 'error', 'error' => 'Missing query parameter']));

$query = $_GET["query"];
$query = htmlspecialchars($query);

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour récupérer les posts']));
}

$users = UserDAO::getUsersMatchingQuery($query);

if (!$users)
    die(json_encode(['status' => 'success', 'users' => []]));

$usersList = array();
foreach ($users as $user) {
    $usersList[] = [
        'id' => $user->getId(),
        'username' => $user->getUsername(),
        'nickname' => $user->getNickname(),
        'avatar' => $user->getAvatarImagePath()
    ];
}

echo json_encode(['status' => 'success', 'users' => $usersList]);