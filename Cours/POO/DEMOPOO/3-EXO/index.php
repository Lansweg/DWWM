<?php
    require_once 'stagiaire.class.php';

$stagiaire = new Stagiaire('martin', 'thomas', [10, 20, 30, 40, 50]);

echo $stagiaire->getNom() . " ";
echo $stagiaire->getPrenom() . "<br>";
echo $stagiaire->calculerMoyenne() . "<br>"; 
echo $stagiaire->trouverMax() . "<br>"; 
echo $stagiaire->trouverMin() . "<br>";

