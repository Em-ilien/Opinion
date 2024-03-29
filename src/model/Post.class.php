<?php

class Post {
    private $id;
    private $content;
    private $date;
    private $postedOnUserPage;
    private $postedOnFilPrincipal;
    private $author;

    public function __construct($id, $content, $date, $postedOnUserPage, $postedOnFilPrincipal, $author) {
        $this->id = $id;
        $this->content = $content;
        $this->date = $date;
        $this->postedOnUserPage = $postedOnUserPage;
        $this->postedOnFilPrincipal = $postedOnFilPrincipal;
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

    public function isPostedOnUserPage() {
        return ($this->postedOnUserPage == 1);
    }

    public function isPostedOnFilPrincipal() {
        return ($this->postedOnFilPrincipal == 1);
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getComments() {
        return CommentDAO::getCommentsForPost($this);
    }

}