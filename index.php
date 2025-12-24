<?php 


class Utilisateur extends Person {
    public $id;
    public $email;
    protected $password;
    public $role;

    public function __construct($id , $email, $password, $role){
        $this->id = $id;
        $this->email;
    }
}