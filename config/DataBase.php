<?php

class Database
{
    private static ?PDO $instance = null;

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=boutique;charset=utf8mb4',
                    'dev',
                    'dev',
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
                echo '✅ Connexion réussie !';
            } catch (PDOException $e) {
                echo '❌ Erreur : '.$e->getMessage();
            }
        }

        return self::$instance;
    }
}
