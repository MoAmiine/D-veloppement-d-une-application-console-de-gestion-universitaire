<?php 
class DatabaseConnection{
public $username = 'root';
public $password = '';

public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;

}
public function getConnection($username, $password){
try{
$conn = new PDO('mysql:localhost=host;dbname=gestion_universitaire', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo 'connected  ';
return $conn;
} catch(PDOException $e){
    echo 'failed :'. $e->getMessage();
}
}
}