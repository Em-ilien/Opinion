<?php

require_once(__DIR__ . '/../model/Database.class.php');

class UserDAO
{

    public static function getUserById($id)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM user WHERE idUser = ?');
        $stmt->execute(array($id));

        $user = $stmt->fetch();

        if (!$user)
            return null;

        return new User($user['idUser'], $user['usernameUser'], $user['nicknameUser'], $user['emailUser'], $user['biographyUser'], $user['birthdayUser']);
    }

    public static function getUserByEmail($email)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM user WHERE LOWER(emailUser) = LOWER(?)');
        $stmt->execute(array($email));

        $user = $stmt->fetch();

        if (!$user)
            return null;

        return new User($user['idUser'], $user['usernameUser'], $user['nicknameUser'], $user['emailUser'], $user['biographyUser'], $user['birthdayUser']);
    }

    public static function getUserByUsername($username)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('SELECT * FROM user WHERE LOWER(usernameUser) = LOWER(?)');
        $stmt->execute(array($username));

        $user = $stmt->fetch();

        if (!$user)
            return null;

        return new User($user['idUser'], $user['usernameUser'], $user['nicknameUser'], $user['emailUser'], $user['biographyUser'], $user['birthdayUser']);
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

    public static function update($user)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('UPDATE user SET nicknameUser = ?, usernameUser = ?, emailUser = LOWER(?), birthdayUser = ?, biographyUser = ? WHERE idUser = ?');
        $stmt->execute(array($user->getNickname(), $user->getUsername(), $user->getEmail(), $user->getBirthday(), $user->getBiography(), $user->getId()));
    }

    public static function updatePassword($user, $password)
    {
        $db = Database::getInstance();

        $stmt = $db->prepare('UPDATE user SET passwordUser = ? WHERE idUser = ?');
        $stmt->execute(array($password, $user->getId()));
    }
}