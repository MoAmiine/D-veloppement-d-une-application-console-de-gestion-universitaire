<?php 
class Utilisateur extends Person {
    public null $id;
    public string $email;
    protected string $password;
    public string $role;

    public function __construct($id , $nom, $prenom, $email, $password, $role){
        parent::__construct($nom, $prenom);
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }

    public function setId ($id){
        
        $this->id = $id;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setRole($role){
        $this->role = $role;
    }
}

