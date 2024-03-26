<?php


class Post
{
    public static function getAll() {
        $pdo = Database::getConnection();
        $stmt = $pdo->query('SELECT * FROM posts');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}