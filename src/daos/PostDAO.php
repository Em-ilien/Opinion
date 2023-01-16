<?php

require_once(__DIR__ . '/../model/Database.class.php');

class PostDAO
{

    public static function createPost($author, $content, $postedOnUserPage = false, $postedOnFilPrincipal = false)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('INSERT INTO post(contentPost, datePost, postedOnUserPage, postedOnFilPrincipal, idUser) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($content, date('Y-m-d H:i:s'), intval($postedOnUserPage), intval($postedOnFilPrincipal), $author->getId()));
    }

    public static function getPostById($id)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM post WHERE idPost = ?');
        $stmt->execute(array($id));

        $post = $stmt->fetch();

        if (!$post)
            return null;

        return new Post($post['idPost'], $post['contentPost'], $post['datePost'], $post['postedOnUserPage'], $post['postedOnFilPrincipal'], UserDAO::getUserById($post['idUser']));
    }
}