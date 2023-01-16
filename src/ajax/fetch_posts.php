<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../model/Post.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_GET["nbPosts"])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing nbPosts parameter']));
}

$nbPosts = intval($_GET['nbPosts']);

$askedUser = null;
if (isset($_GET['userId'])) {
    $askedUser = UserDAO::getUserById(intval($_GET['userId']));
    if ($askedUser == null) {
        die(json_encode(['status' => 'error', 'error' => 'User not found']));
    }
} else {
    if (!isset($_GET['sortByMostCommented'])) {
        die(json_encode(['status' => 'error', 'error' => 'Missing sortByMostCommented parameter']));
    }
    
    $sortByMostCommented = ($_GET['sortByMostCommented'] == 'true');
}

if (isset($_GET['lastPostId'])) {
    $lastPostId = intval($_GET['lastPostId']);
} else {
    $lastPostId = null;
}

if ($nbPosts < 0) {
    die(json_encode(['status' => 'error', 'error' => 'nbPosts must be positive']));
}

if ($nbPosts > 30) {
    die(json_encode(['status' => 'error', 'error' => 'nbPosts must be less than 30']));
}

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour récupérer les posts']));
}

$user = $_SESSION['user'];

if ($askedUser != null) {
    $posts = PostDAO::getMostRecentPostsOfUser($nbPosts, $lastPostId, $askedUser);
} else if (!$sortByMostCommented) {
    $posts = PostDAO::getMostRecentPosts($nbPosts, $lastPostId);
} else {
    $posts = PostDAO::getMostCommentedPosts($nbPosts, $lastPostId);
}

$postsList = array();
foreach ($posts as $post) {
    $postsList[] = array(
        "authorId" => $post->getAuthor()->getId(),
        "authorUsername" => $post->getAuthor()->getUsername(),
        "authorNickname" => $post->getAuthor()->getNickname(),
        "authorAvatar" => $post->getAuthor()->getAvatarImagePath(),
        "content" => $post->getContent(),
        "date" => $post->getDate(),
        "id" => $post->getId(),
    );
}

echo json_encode(['status' => 'success', 'posts' => $postsList]);