<?php
abstract class Person {
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
    }

    public function getNom(){
        return $this-> nom;
    }

    public function getPrenom(){
        return $this-> prenom;
    }

    public function setNom($nom){
        if(empty($nom)) throw new Exception("nom est vide");
        //validation
        $this-> nom = $nom;

    }

    public function setPrenom($prenom){
        if(empty($prenom)) throw new Exception("prenom est vide");
        //validation
        $this-> prenom = $prenom;
    }
}
