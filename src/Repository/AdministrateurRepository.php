<?php 

class AdministrateurRepository{
    public function signupAdmin(Admnistrateur $admin, $conn){
        $stmt = $conn->prepare('INSERT INTO Administrateur (id, nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?, ?)');
        return $stmt->execute([null, $admin->getNom(), $admin->getPrenom(), $admin->getEmail(), $admin->getPassword(), $admin->getRole()]);
    }

    public function login($email, $password, $conn){
        $stmt = $conn->prepare('SELECT * FROM Administrateur WHERE email = ? AND password = ?');
        $stmt->execute([$email, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createFormateur(Formateur $formateur, $conn){
        $stmt = $conn->prepare('INSERT INTO formateurs (id, nom, prenom, role) VALUES (?, ?, ?, ?)');
        return $stmt->execute([null, $formateur->getNom(), $formateur->getPrenom(), $formateur->getRole()]);
    }
}