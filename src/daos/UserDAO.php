<?php

require_once(__DIR__ . '/../model/Database.class.php');

class UserDAO
{

    public static function getUserByEmail($email)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM user WHERE LOWER(emailUser) = LOWER(?)');
        $stmt->execute(array($email));

        $user = $stmt->fetch();

        if (!$user)
            return null;

        return new User($user['idUser'], $user['usernameUser'], $user['nicknameUser'], $user['emailUser'], $user['biographyUser']);
    }

    public static function getUserByUsername($username)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM user WHERE LOWER(usernameUser) = LOWER(?)');
        $stmt->execute(array($username));

        $user = $stmt->fetch();

        if (!$user)
            return null;

        return new User($user['idUser'], $user['usernameUser'], $user['nicknameUser'], $user['emailUser'], $user['biographyUser']);
    }

    public static function getPassword($user)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT passwordUser FROM user WHERE idUser = ?');
        $stmt->execute(array($user->getId()));

        $password = $stmt->fetch();

        if (!$password)
            return null;

        return $password['passwordUser'];
    }

    public static function createUser($nickname, $username, $email, $password, $birthday, $biography)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('INSERT INTO user(nicknameUser, usernameUser, emailUser, passwordUser, birthdayUser, biographyUser) VALUES (?, ?, LOWER(?), ?, ?, ?)');
        $stmt->execute(array($nickname, $username, $email, $password, $birthday, $biography));

        return (new UserDAO)->getUserByUsername($username);
    }
}