<?php 

class Admnistrateur extends Utilisateur {

    public function __construct($id , $nom, $prenom, $email, $password, $role) {
        parent::__construct($id , $nom, $prenom, $email, $password, $role);
        $this->role = 'Admin';
    }
    public function setRole($role){
        $this->role = 'Admin';
    }
}
