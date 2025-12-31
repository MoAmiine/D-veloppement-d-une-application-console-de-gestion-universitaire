<?php 
    class UtilisateurRepository{
    public function signup(Utilisateur $user, $conn){
    $stmt = $conn->prepare('INSERT INTO utilisateurs (id, nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?, ?)');
    return $stmt->execute([null, $user->getNom(), $user->getPrenom(), $user->getEmail(), $user->getPassword(), $user->getRole()]);
    }
    }