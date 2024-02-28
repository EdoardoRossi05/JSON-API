<?php

class DbManager
{
    public static function Connect($dbname)
    {
        $dsn = "mysql:dbname={$dbname};host=192.168.2.200";
        try
        {
            $pdo = new PDO($dsn, 'edoardo_rossi', 'deactivates.spiritualitys.infer.');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch (PDOException $e)
        {
            die("Errore durante la connessione al DB ");
        }
    }
}