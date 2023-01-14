<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['checkbox1']) || !isset($_POST['checkbox2'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing a checkbox parameter']));
}

$checkbox1 = $_POST['checkbox1'];
$checkbox2 = $_POST['checkbox2'];

if ($checkbox1 != 'true' || $checkbox2 != 'true') {
    die(json_encode(['status' => 'error', 'error' => 'You must accept the conditions']));
}

function completeRegistration() {
    session_start();

    foreach (array('nickname', 'username', 'email', 'password', 'birthday') as $arg) {
        if (!isset($_SESSION[$arg])) {
            die(json_encode(['status' => 'error', 'error' => 'Missing ' . $arg . ' parameter']));
        }
    }

    $nickname = $_SESSION['nickname'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $birthday = $_SESSION['birthday'];
    $avatar = (isset($_SESSION['avatar']) ? $_SESSION['avatar'] : null);
    $biography = (isset($_SESSION['biography']) && $_SESSION['biography'] != "" ? $_SESSION['biography'] : null);

    $user = (new UserDAO)->createUser($nickname, $username, $email, $password, $birthday, $biography);

    if ($avatar != null && $avatar != "") {
        $avatar = __DIR__ . "/../../" . $avatar;
        $user->setAvatarImage($avatar);
    }

    session_destroy();
    session_start();
    $_SESSION['user'] = $user;
}

completeRegistration();

echo json_encode(['status' => 'success']);