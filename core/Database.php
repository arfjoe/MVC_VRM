<?php
namespace App\Core;

use PDO;
use PDOException;

class Database 
{

    const CONFIG = ['DB_DSN'=>'mysql:host=localhost;dbname=mvc;charset=UTF8',
    'DB_USER'=>'root','DB_PASSWORD'=>''];

    public PDO $pdo;

    public function __construct()
    {

        try {

            $this->pdo= new PDO (self::CONFIG['DB_DSN'],self::CONFIG['DB_USER'],self::CONFIG['DB_PASSWORD']);

            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /* $this->pdo->query("SET NAMES 'utf8'"); */
            echo 'Connection établie !';

        } catch (PDOException $e) {

            die("Erreur: " . $e->getMessage());
        }
    }
}