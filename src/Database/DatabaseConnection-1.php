<?php
class DatabaseConnection_1
{
    public $db = "gestion";
    public $user = "root";
    public $pass = "";

    public function __construct()
    {

    }
    public function getConnection()
    {
        try {
            return  new PDO("mysql:localhost=host, dbname=$this->db", $this->user, $this->pass);
        } catch (PDOException) {
            echo "error!!!";
        }
    }
}
