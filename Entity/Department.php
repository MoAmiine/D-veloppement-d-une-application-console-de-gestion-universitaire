<?php
class Department
{
    private int $id;
    private string $nom;
    private string $description;
    public function __construct($id, $nom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getId()
    {
        $this->id;
    }
    public function getNom()
    {
        $this->nom;
    }
    public function getDescription()
    {
        $this->description;
    }
    public function setId($id)
    {
        if (empty($id)) throw new Exception("id est vide");
        $this->id = $id;
    }
    public function setNom($nom)
    {
        if (empty($nom)) throw new Exception("nom est vide");
        $this->nom = $nom;
    }
    public function setDescription($description)
    {
        if (empty($description)) throw new Exception("description est vide");
        $this->description = $description;
    }
}
