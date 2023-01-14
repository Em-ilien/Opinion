<?php

define('MINIMAL_AGE_FOR_REGISTRATION', 13);

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['birthday'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing birthday parameter']));
}

$birthday = $_POST['birthday'];

$day = intval(substr($birthday, 8, 2));
$month = intval(substr($birthday, 5, 2));
$year = intval(substr($birthday, 0, 4));

$birthday = new DateTime($year . '-' . $month . '-' . $day);

if ($birthday->diff(new DateTime())->y < MINIMAL_AGE_FOR_REGISTRATION) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez avoir au moins ' . MINIMAL_AGE_FOR_REGISTRATION . ' ans pour vous inscrire']));
}

session_start();

$_SESSION['birthday'] = $_POST['birthday'];

echo json_encode(['status' => 'success']);