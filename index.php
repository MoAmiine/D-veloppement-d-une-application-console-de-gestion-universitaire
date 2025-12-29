<?php 

include 'src/Database/DatabaseConnection-1.php';
include 'src/Repository/CourseRepository.php';
include 'src/Entity/Course.php';
include 'src/Database/DatabaseConnection.php';
include_once 'src/Abstract/Person.php';
include_once 'src/Entity/utilisateur.php';
include_once 'src/Entity/Admnistrateur.php';
include_once 'src/Entity/Formateur.php';
require 'src/Repository/utilisateurRepository.php';
include 'src/Repository/AdministrateurRepository.php';
// $course1 = new CourseRepository();
// $course1 -> create('test','48H');
// var_dump($course1);


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
        if ($role = 'admin'){
        $admin = new Admnistrateur(null, $nom, $prenom, $email, $password, $role);
            $repo = new AdministrateurRepository();
            $repo->signUpAdmin($admin, $conn);
        }
        else{
        $user = new Utilisateur(null, $nom, $prenom, $email, $password, $role);
        $repo = new UtilisateurRepository();
        $repo->signup($user, $conn);
        }
        switch($role){
            case 'admin':
                echo "********************************* \n";
                echo "------------Bienvenue ".$prenom."------------ \n";        
                echo "********************************* \n";
                echo "1 - gerer les formateurs \n";
                echo "2 - gerer les etudiants \n";
                $choixadmin = readline("Choisissez votre option : ");
                if ($choixadmin == 1){
                    
                }
            }

        
        break;
    
    case '2':
        echo '========== connection ============';
        $email = readline('email :');
        $password = readline('password :');
        break;
}
