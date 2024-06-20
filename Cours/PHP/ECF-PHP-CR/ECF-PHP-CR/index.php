<?php
echo "Menu Principal:\n";
echo "1. Calcul sur le cercle\n";
echo "2. Ma calculatrice\n";
echo "3. Gestion des notes\n";
echo "4. Jeu chifoumi\n";
echo "5. Quitter\n";
$choix = intval(readline("Choisissez une option: "));
switch ($choix) {
    case 1:
        require 'Exercice1.php';
        break;
    case 2:
        require 'Exercice2.php';
        break;
    case 3:
        require 'Exercice3.php';
        break;
    case 4:
        require 'Exercice4.php';
        break;
    case 5:
        echo "Au revoir!\n";
        exit;
    default:
        echo "Option invalide. Veuillez choisir entre 1 et 5.\n";
}