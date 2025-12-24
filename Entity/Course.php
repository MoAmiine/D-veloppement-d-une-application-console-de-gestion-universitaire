<?php
class Course{
    private int $id;
    private string $titre;
    private int $volumeHoraire;
    private int $departmentId;

    public function __construct($id, $titre, $volumeHoraire, $departmentId)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->volumeHoraire = $volumeHoraire;
        $this->departmentId = $departmentId;
    }

    public function getId(){
        return $this->id;
    }
    public function gettitre(){
        return $this->titre;
    }
    public function getvolumeHoraire(){
        return $this->volumeHoraire;
    }
    public function getDepartmentId(){
        return $this->departmentId;
    }
    public function setId($id){
        if (empty($id)) throw new Exception("id est vide");
        $this->id = $id;
    }
    public function settitre($titre){
        if (empty($titre)) throw new Exception("titre est vide");
        $this->titre = $titre;
    }
    public function setvolumeHoraire($volumeHoraire){
        if (empty($volumeHoraire)) throw new Exception("volumeHoraire est vide");
        $this->volumeHoraire = $volumeHoraire;
    }
    public function setDepartmentId($departmentId){
        if (empty($departmentId)) throw new Exception("departmentId est vide");
        $this->departmentId = $departmentId;
    }
}