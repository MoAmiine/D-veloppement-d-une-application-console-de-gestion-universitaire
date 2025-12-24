<?php 
$username = 'root';
$password = '';

try{
$conn = new PDO('mysql:localhost=host;dbname=gestion_universitaire', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo 'connected  ';
} catch(PDOException $e){
    echo 'failed :'. $e->getMessage();
}