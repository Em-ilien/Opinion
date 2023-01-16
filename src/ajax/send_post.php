<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../model/Post.class.php');

if (!isset($_POST['post']) || !isset($_POST['user_page']) || !isset($_POST['fil_principal'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing post, page or fil_principal parameter']));
}

$postContent = $_POST['post'];
$sendOnUserPage = $_POST['user_page'];
$sendOnFilPrincipal = $_POST['fil_principal'];

$sendOnFilPrincipal = $sendOnFilPrincipal == 'true';
$sendOnUserPage = $sendOnUserPage == 'true';

if (!$sendOnUserPage && !$sendOnFilPrincipal) {
    die(json_encode(['status' => 'error', 'error' => 'Vous ne pouvez pas publier un post qui n\'apparaîtra ni sur votre page d\'utilisateur ni le fil principal.']));
}

if (strlen($postContent) < 50) {
    die(json_encode(['status' => 'error', 'error' => 'Votre post doit contenir au moins 50 caractères.']));
}

if (strlen($postContent) > 3000) {
    die(json_encode(['status' => 'error', 'error' => 'Votre post ne peut pas contenir plus de 3000 caractères.']));
}

$postContent = htmlspecialchars($postContent);

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre biographie']));
}

$user = $_SESSION['user'];

$user->writePost($postContent, $sendOnUserPage, $sendOnFilPrincipal);

echo json_encode(['status' => 'success']);