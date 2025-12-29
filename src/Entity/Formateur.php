<?php 

class Formateur extends Utilisateur{

    public $courselist = [];
        public function __construct($id , $nom, $prenom, $email, $password, $role) {
        parent::__construct($id , $nom, $prenom, $email, $password, $role);
        $this->role = 'Utilisateur academique';

    }
    public function setRole($role){
        $this->role = 'Utilisateur academique';
    }
    public function getCourseFormateur(): array{
        return $this->courselist;
    }
    public function setCourseFormateur(array $course){
        $this->courselist = $course;
    }
}

    