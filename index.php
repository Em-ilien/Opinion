<?php

require_once(__DIR__ . "/src/model/User.class.php");
require_once(__DIR__ . "/src/model/Comment.class.php");
require_once(__DIR__ . "/src/model/Post.class.php");

if (pageParamaterIsSet()) {
    $page = $_GET["page"];
} else {
    $page = "fil_principal";
}

session_start();

tryRequire(__DIR__ . "/src/controllers/" . $page . ".php");

function pageParamaterIsSet()
{
    return isset($_GET["page"]) && $_GET["page"] != "";
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