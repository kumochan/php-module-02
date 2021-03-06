<?php

namespace App\Model;
use PDO;
class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        // Dashboard controller
        $this->dsn = 'mysql:host=127.0.0.1;dbname=northwind';
        
        //$this->dsn = 'mysql:host=127.0.0.1;dbname=coffee_shop';
        $this->username = 'root';
        $this->password = '12345678';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}