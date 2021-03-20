<?php



class ConnectionProvider
{
    private static $pdo;

    public static function getConnection()
    {
        try{
            $dsn = "sqlite:./bdd.sqlite";
            static::$pdo = new PDO($dsn);
        } catch (PDOException $e) {
            echo "new Exception";
        }
        return static::$pdo;
    }
}