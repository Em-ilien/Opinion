<?php

if (userAlreadyLoggedIn()) {
    header("Location: .");
    exit();
}

require(__DIR__ . "/../../templates/login/login.php");

function userAlreadyLoggedIn() {
    return isset($_SESSION["id"]);
}