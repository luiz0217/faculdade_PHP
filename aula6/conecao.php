<?php

define('HOST', 'Localhost');
define('DB', 'facul');
define('USER', 'root');
define('PASS', '');

class conecao
{
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
        } catch (PDOException $e) {
            echo 'erro ao conectar';
        }
    }


    public function conectar() {
        return $this->pdo;
    }
}
