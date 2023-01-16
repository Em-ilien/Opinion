<?php

if (!isset($_SESSION['nickname'])) {
    header("Location: ?page=register/2");
    exit;
}

if (!isset($_SESSION['username'])) {
    header("Location: ?page=register/3");
    exit;
}

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    header("Location: ?page=register/4");
    exit;
}

if (!isset($_SESSION['birthday'])) {
    header("Location: ?page=register/5");
    exit;
}

if (isset($_POST['validation-button'])) {
    //upload file
    $target_dir = __DIR__ . "/../../../public/img/uploads/";
    $target_file = $target_dir . time() . "-" . basename($_FILES["avatar"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["avatar"]["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["avatar"]["name"])) . " has been uploaded.";
            $_SESSION['avatar'] = "public/img/uploads/" . time() . "-" . basename($_FILES["avatar"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    }

    header("Location: ?page=register/7");
    exit();
}

require(__DIR__ . "/../../../templates/register/register6.php");