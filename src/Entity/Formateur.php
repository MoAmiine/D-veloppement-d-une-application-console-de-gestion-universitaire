<?php 

class Formateur extends Utilisateur{
        public function __construct($id , $nom, $prenom, $email, $password, $role) {
        parent::__construct($id , $nom, $prenom, $email, $password, $role);
        $this->role = 'Utilisateur academique';
    }
    public function setRole($role){
        $this->role = 'Utilisateur academique';
    }
}