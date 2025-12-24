<?php 
require '../Abstract/Person.php';

require '../Database/DatabaseConnection.php';
include '../Entity/utilisateur.php';



  $user = new Utilisateur(
    null, 
    readline('nom :'), 
    readline('prenom :'), 
    readline('email :'), 
    readline('password :'),
    readline('role : ')
    );
    $stmt = $conn->prepare('INSERT INTO utilisateurs (id, nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?, ?)')
    ->execute([null, $user->getNom(), $user->getPrenom(), $user->getEmail(), $user->getPassword(), $user->getRole()]);