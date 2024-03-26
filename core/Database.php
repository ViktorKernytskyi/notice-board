<?php


class Database
{
    public static function getConnection() {
        $dsn = 'mysql:host=localhost;dbname=blog;charset=utf8';

        try {
            $pdo = new PDO($dsn);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Помилка підключення до бази даних: ' . $e->getMessage());
        }
    }
}