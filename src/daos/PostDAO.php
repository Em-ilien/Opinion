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

    public static function getMostCommentedPosts($nbPosts, $lastPostId)
    {
        $db = Database::getInstance();

        if ($lastPostId == null) {
            $stmt = $db->prepare('' .
                'SELECT *, post.idPost AS postIdPost, post.idUser AS postIdUser FROM post
                LEFT JOIN comment AS c1 ON c1.idPost=post.idPost
                WHERE post.postedOnFilPrincipal=1
                GROUP BY post.idPost
                ORDER BY COUNT(c1.idComment) DESC
                LIMIT ' . $nbPosts);
            $stmt->execute();
        } else {
            $stmt = $db->prepare('' .
                'SELECT *, post.idPost AS postIdPost, post.idUser AS postIdUser FROM post
                LEFT JOIN comment AS c1 ON c1.idPost=post.idPost
                WHERE post.postedOnFilPrincipal=1
                AND post.idPost > ?
                GROUP BY post.idPost
                HAVING COUNT(c1.idComment) < (
                                        SELECT COUNT(c2.idComment)
                                        FROM comment AS c2
                                        WHERE c2.idPost = ?
                                        GROUP BY c2.idPost
                                        )
                OR c1.idComment IS NULL
                ORDER BY COUNT(c1.idComment) DESC
                LIMIT ' . $nbPosts);
            $stmt->execute(array($lastPostId, $lastPostId));
        }

        $posts = $stmt->fetchAll();

        $result = [];

        foreach ($posts as $post) {
            $result[] = new Post($post['postIdPost'], $post['contentPost'], $post['datePost'], $post['postedOnUserPage'], $post['postedOnFilPrincipal'], UserDAO::getUserById($post['postIdUser']));
        }

        return $result;
    }

    public static function getMostRecentPosts($nbPosts, $lastPostId)
    {
        $db = Database::getInstance();

        if ($lastPostId == null) {
            $stmt = $db->prepare('SELECT * FROM post WHERE post.postedOnFilPrincipal=1 ORDER BY datePost DESC, idPost DESC LIMIT ' . $nbPosts);
            $stmt->execute();
        } else {
            $stmt = $db->prepare('SELECT * FROM post WHERE idPost < ? AND post.postedOnFilPrincipal=1 ORDER BY datePost DESC, idPost DESC LIMIT ' . $nbPosts);
            $stmt->execute(array($lastPostId));
        }

        $rows = $stmt->fetchAll();

        $posts = [];
        foreach ($rows as $row) {
            $posts[] = new Post($row['idPost'], $row['contentPost'], $row['datePost'], $row['postedOnUserPage'], $row['postedOnFilPrincipal'], UserDAO::getUserById($row['idUser']));
        }

        return $posts;
    }

    public static function getMostRecentPostsOfUser($nbPosts, $lastPostId, $user)
    {
        $db = Database::getInstance();

        if ($lastPostId == null) {
            $stmt = $db->prepare('SELECT * FROM post WHERE post.postedOnUserPage=1 AND post.idUser=? ORDER BY datePost DESC, idPost DESC LIMIT ' . $nbPosts);
            $stmt->execute(array($user->getId()));
        } else {
            $stmt = $db->prepare('SELECT * FROM post WHERE idPost < ? AND post.postedOnUserPage=1 AND post.idUser=? ORDER BY datePost DESC, idPost DESC LIMIT ' . $nbPosts);
            $stmt->execute(array($lastPostId, $user->getId()));
        }

        $rows = $stmt->fetchAll();

        $posts = [];
        foreach ($rows as $row) {
            $posts[] = new Post($row['idPost'], $row['contentPost'], $row['datePost'], $row['postedOnUserPage'], $row['postedOnFilPrincipal'], UserDAO::getUserById($row['idUser']));
        }

        return $posts;
    }
}