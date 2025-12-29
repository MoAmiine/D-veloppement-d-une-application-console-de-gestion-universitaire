<?php 

class FormateurRepository{
    public function createFormateur($formateur){
        $formateur = new Formateur(
            null,
            readline('Entrez le nom du formateur : '),
            readline('Entrez le prenom du formateur : '),
            null,
            null,
            'Utilisateur academique'
        );
    }
    public function addFormateurToDatabase(Formateur $formateur, $conn){
        $stmt = $conn->prepare('INSERT INTO formateurs VALUES(?,?,?,?,?,?)');
        $stmt->execute([null, $formateur->getNom(), $formateur->getPrenom(), null, null, null, $formateur->getRole()]);
    }
}
$formateur->createFormateur()->addFormateurToDatabase();