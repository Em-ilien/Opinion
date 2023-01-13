<?php

class Comment {
    private $id;
    private $content;
    private $notation;
    private $typeNotation;
    private $date;
    private $author;
    private $post;

    public function __construct($id, $content, $notation, $typeNotation, $date, $author, $post) {
        $this->id = $id;
        $this->content = $content;
        $this->notation = $notation;
        $this->typeNotation = $typeNotation;
        $this->date = $date;
        $this->author = $author;
        $this->post = $post;
    }

    public function getId() {
        return $this->id;
    }

    public function getContent() {
        return $this->content;
    }

    public function getNotation() {
        return $this->notation;
    }

    public function getTypeNotation() {
        return $this->typeNotation;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPost() {
        return $this->post;
    }

    // public function setId($id) {
    //     $this->id = $id;
    // }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setNotation($notation) {
        $this->notation = $notation;
    }

    public function setTypeNotation($typeNotation) {
        $this->typeNotation = $typeNotation;
    }

    // public function setDate($date) {
        // $this->date = $date;
    // }

    // public function setAuthor($author) {
        // $this->author = $author;
    // }

    // public function setPost($post) {
        // $this->post = $post;
    // }
}