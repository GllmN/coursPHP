<?php


class Connection
{
    private static $pdo;

    public static function getConnection()
    {
        try{
            $dsn = "sqlite:./bddVoiture.sqlite";
            static::$pdo = new PDO($dsn);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return static::$pdo;
    }
}