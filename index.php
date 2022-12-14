<?php

if (pageParamaterIsSet()) {
    $page = $_GET["page"];
} else {
    $page = "menu";
}

if (pageParameterContainsLogin($page)) {
    switch ($page) {
        case "login":
            tryRequire(__DIR__ . "/src/controllers/" . $page . "/index.php");
            exit();
        default:
            tryRequire(__DIR__ . "/src/controllers/" . $page . ".php");
            exit();
    }
}

session_start();

if (!userIsConnected()) {
    header("Location: ?page=login");
    exit();
}

tryRequire(__DIR__ . "/src/controllers/" . $page . ".php");

function pageParamaterIsSet()
{
    return isset($_GET["page"]) && $_GET["page"] != "";
}
function pageParameterContainsLogin($page)
{
    return strpos($page, "login") !== false;
}
function userIsConnected()
{
    return isset($_SESSION["id"]);
}
function tryRequire($path)
{
    global $page;

    $noError = include($path);

    if (!$noError) {
        $nbSlash = substr_count($page, "/");

        $path = "./";
        for ($i = 0; $i < $nbSlash; $i++)
            $path .= "../";

        header("Location: " . $path);
    }
}