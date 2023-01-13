<?php

class Post {
    private $id;
    private $content;
    private $date;
    private $author;

    public function __construct($id, $content, $date, $author) {
        $this->id = $id;
        $this->content = $content;
        $this->date = $date;
        $this->author = $author;
    }

    public function getId() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAuthor() {
        return $this->author;
    }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function setContent($content) {
        $this->content = $content;
    }

    // public function setDate($date) {
    //     $this->date = $date;
    // }

    // public function setAuthor($author) {
    //     $this->author = $author;
    // }

    public function getComments() {
        return CommentDAO::getCommentsForPost($this);
    }

}