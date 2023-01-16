<?php

class User {
    private $id;
    private $username;
    private $nickname;
    private $email;
    private $biography;
    private $birthday;

    public function __construct($id, $username, $nickname, $email, $biography, $birthday) {
        $this->id = $id;
        $this->username = $username;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->biography = $biography;
        $this->birthday = $birthday;
    }

    public function isAuthorOf($post) {
        return $post->getAuthor()->getId == $this->id;
    }

    public function isAuthorOfComment($comment) {
        return $comment->getAuthor()->getId == $this->id;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getBiography() {
        return $this->biography;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getAvatarImagePath() {
        $path = "public/img/avatars/user-" . $this->id . ".png";

        //if file doesn't exist, return default avatar
        if (!file_exists(__DIR__ . "/../../" . $path)) {
            return "public/img/default_avatar_user.png";
        }

        return "public/img/avatars/user-" . $this->id . ".png";
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setBiography($biography) {
        $this->biography = $biography;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    public function setAvatarImage($newAvatarFilePath) {
        $toDirPath = __DIR__ . "/../../" . $this->getAvatarImagePath();
        rename($newAvatarFilePath, $toDirPath);
    }
}