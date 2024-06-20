<?php
require_once "Plante.class.php";

$chene = new Plante("Le chêne","arbre","20 mètres","100 ans ", "Fagacées");
$rose = new Plante("La rose","fleur","1 mètre","2 ans","Rosacées");
$tournesol = new Plante("La tournesol","fleur","3 mètres","1 an","Astéracées");

$chene->affichage();
$rose->affichage();
$tournesol->affichage();

$chene->setHauteur("50 mètres");
$chene->affichage();

?>