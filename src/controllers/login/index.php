<?php

session_start();

if (userAlreadyLoggedIn()) {
    header("Location: .");
    exit();
}

echo "test";
exit;

require(__DIR__ . "/../../../templates/login/login.php");

function userAlreadyLoggedIn() {
    return isset($_SESSION["id"]);
}