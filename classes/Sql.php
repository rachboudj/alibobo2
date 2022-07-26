<?php

class Sql
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword = "";
    private string $database = "alibobo";
    private object $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->userPassword);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        catch(PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public function inserer(string $sql): bool
    {
        if ($this->connexion->exec($sql))
            return true;
        else
            return false;
    }

    public function select(string $sql, bool|int $count = false): array|int
    {

    }

    public function update (string $sql): bool
    {

    }

    public function delete(string $sql): bool
    {

    }

    public function __destruct()
    {   
        if (isset($this->connexion))
            $this->connexion = null;
    }
}
