<?php

if (userAlreadyLoggedIn()) {
    header("Location: index.php");
    exit();
}

require(__DIR__ . "/../../templates/login/login.php");

function userAlreadyLoggedIn() {
    return isset($_SESSION["user"]);
}