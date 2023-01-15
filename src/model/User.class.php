<?php

class User {
    private $id;
    private $username;
    private $nickname;
    private $email;
    private $biography;

    public function __construct($id, $username, $nickname, $email, $biography) {
        $this->id = $id;
        $this->username = $username;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->biography = $biography;
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

    public function getAvatarImagePath() {
        return "public/img/avatars/user-" . $this->id . ".png";
    }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // public function setPassword($password) {
    //
    // }

    public function setBiography($biography) {
        $this->biography = $biography;
    }

    public function setAvatarImage($newAvatarFilePath) {
        $toDirPath = __DIR__ . "/../../" . $this->getAvatarImagePath();
        rename($newAvatarFilePath, $toDirPath);
    }

    public function __toString() {
        return "User [id=" . $this->id . ", username=" . $this->username . ", nickname=" . $this->nickname . ", email=" . $this->email . ", password=" . $this->password . ", biography=" . $this->biography . ", avatar=" . $this->avatar . "]";
    }
}