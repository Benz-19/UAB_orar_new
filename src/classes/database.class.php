<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $passwd = "";
    private $dbname = "uab_2024";
    private $conn;

    public function Connection()
    {
        try {

            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->username, $this->passwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }

        return $this->conn;
    }
}
