<?php
require 'fonction.php';

do {
    echo "\t**********************\n";
    echo "\tCALCUL SUR LE CERCLE\n";
    echo "\t**********************\n";
    $rayon = readline("Entrez le rayon pour le calcul: ");
    $circonference = calculerCirconference($rayon);
    $surface = calculerSurface($rayon);

    echo "La circonférence du cercle est : $circonference \nLa surface du cercle est : $surface.\n";

    do {
        $continuer = readline("Voulez-vous effectuer un autre calcul ? (o/n): ");
    } while ($continuer !== 'o' && $continuer !== 'n');
    if ($continuer === 'n') { //si il ecris "n" ça quit l'application   
        echo "Au revoir à bientot!\n";
        exit;
    }

} while ($continuer === 'o'); // revient au debut pour calculer un nouveeau rayon















// do {
//     echo "\t***************\n";
//     echo "CALCUL SUR LE CERCLE\n";
//     echo "\t***************\n";
//     $rayon = 0.75; // Vous pouvez changer cette valeur pour tester avec différents rayons


//     switch ($choix) {
//         case 1:
            
//             break;

//         case 2:
            
//             break;

//         case 3:

//             break;

//         case 4:
//             echo "Au revoir!\n";
//             break;

//         default:
//             echo "Option invalide, veuillez réessayer.\n";
//     }
// } while ($choix != 4);


