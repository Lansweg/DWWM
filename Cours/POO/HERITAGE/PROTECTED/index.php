<?php
require_once "Chene.class.php";
require_once "Rose.class.php";

$chene = new Chene("Le chêne","arbre","20 mètres","100 ans ", "Fagacées","brun");
$rose = new Rose("La rose","Plante","2 mètre","10 ans","plante","rose", "5 épine");

$rose->afficherRose();
echo"<br>";
$chene->afficherChene();