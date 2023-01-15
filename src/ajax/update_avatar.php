<?php

require_once(__DIR__ . '/../model/User.class.php');
require_once(__DIR__ . '/../daos/UserDAO.php');

if (!isset($_POST['avatar'])) {
    die(json_encode(['status' => 'error', 'error' => 'Missing avatar parameter']));
}

$avatar = $_POST['avatar'];

session_start();

if (!isset($_SESSION['user'])) {
    die(json_encode(['status' => 'error', 'error' => 'Vous devez être connecté pour modifier votre biographie']));
}

$user = $_SESSION['user'];

//upload file
$target_dir = __DIR__ . "/../../public/img/avatars/";
$target_file = $target_dir . "user-" . $user->getId() . ".png";

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$avatar = $_POST["avatar"];

// Check if image file is a actual image or fake image
$check = getimagesize($avatar);
if ($check === false) {
    die(json_encode(['status' => 'error', 'error' => 'File is not an image']));
}

$avatar = str_replace('data:image/png;base64,', '', $avatar);
$avatar = str_replace(' ', '+', $avatar);
$data = base64_decode($avatar);

// Check file size
if (strlen($data) > 500000) {
    die(json_encode(['status' => 'error', 'error' => 'Sorry, your file is too large']));
}
// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    die(json_encode(['status' => 'error', 'error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed']));
}

if (!file_put_contents($target_file, $data))
    die(json_encode(['status' => 'error', 'error' => 'Sorry, there was an error uploading your file (uknown error)']));

echo json_encode(['status' => 'success']);