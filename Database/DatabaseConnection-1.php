<?php
class DatabaseConnection_1
{
    public $db = "gestion";
    public $user = "root";
    public $pass = "";

    public function __construct($db, $user, $pass)
    {
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
    }
    public function getConnection($db, $user, $pass)
    {
        try {
            return  new PDO("mysql:localhost=host, dbname=$db", $user, $pass);
        } catch (PDOException) {
            echo "error!!!";
        }
    }
}
