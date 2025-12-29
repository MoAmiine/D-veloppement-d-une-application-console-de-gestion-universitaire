<?php 

include 'src/Database/DatabaseConnection-1.php';
include 'src/Repository/CourseRepository.php';
include 'src/Entity/Course.php';
// include 'Repository/utilisateurRepository.php';

$course1 = new CourseRepository();
$course1 -> create('test','48H');
var_dump($course1);
include 'src/Database/DatabaseConnection.php';
include_once 'src/Abstract/Person.php';
include_once 'src/Entity/utilisateur.php';
// include_once 'src/Entity/Admnistrateur.php';
// include_once 'src/Entity/Formateur.php';
require 'src/Repository/utilisateurRepository.php';


echo "============ Menu ================ \n";

echo "1 = s inscrire \n";
echo "2 = se connectez \n";
$choix = readline("choisissez une option : ");

switch ($choix) {
    case '1':
        echo "========= inscription =========\n";
        $nom = readline('nom :');
        $prenom = readline('prenom :'); 
        $email = readline('email :');
        $password = readline('password :');
        $role = readline('role (admin / Utilisateur academique): ');
        $db = new DatabaseConnection('root', '');
        $conn = $db->getConnection('root', '');
        $user = new Utilisateur(null, $nom, $prenom, $email, $password, $role);
        $repo = new UtilisateurRepository();
        $repo->signup($user, $conn);
        
        break;
    
    default:
        
        break;
}
