<?php

class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        // Lakukan koneksi ke database di sini
        $this->connection = new PDO("mysql:host=localhost;dbname=books", "username", "password");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getConnection()
    {
        return $this->connection;
    }
}
