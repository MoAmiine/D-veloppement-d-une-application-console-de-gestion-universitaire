<?php 

include 'src/Database/DatabaseConnection-1.php';
include 'src/Repository/CourseRepository.php';
include 'src/Entity/Course.php';
// include 'Repository/utilisateurRepository.php';

$course1 = new CourseRepository();
$course1 -> create('test','48H');
var_dump($course1);
