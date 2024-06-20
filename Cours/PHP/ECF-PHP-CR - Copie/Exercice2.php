<?php

require 'fonction.php';

do {
    echo "*************************************************\n";
    echo "*\t\tMa calculatrice\t\t\t*\n";
    echo "*************************************************\n";
    echo "\n";
    $premierChiffre = nbrOk("Entrez le premier nombre: ");
    $deuxiemeChiffre = nbrOk("Entrez le deuxieme nombre: ");
    do {
        echo "\n";
        echo "-----------------------------------\n";
        echo "Menu : \n";
        echo "1. Addition (+)\n";
        echo "2. Soustraction (-)\n";
        echo "3. Multiplication (*)\n";
        echo "4. Division (/)\n";
        $choixOperation = readline("Entrez le numéro de l'opération que vous voulez effectuer: ");
        switch ($choixOperation) {
            case '1':
                $operation = '+';
                break;
            case '2':
                $operation = '-';
                break;
            case '3':
                $operation = '*';
                break;
            case '4':
                $operation = '/';
                break;
            default:
                echo "Choix invalide. Veuillez entrer un numéro valide (1-4).\n";
                $operation = null;
        }
    } while ($operation === null);
    $resultat = calculer($premierChiffre, $deuxiemeChiffre, $operation);
    echo "Le résultat est: $resultat\n";
    do {
        $continuer = readline("Voulez-vous effectuer un autre calcul ? (o/n): ");
    } while ($continuer !== 'o' && $continuer !== 'n');
    if ($continuer === 'n') {
        echo "Au revoir à bientôt!\n";
        exit;
    }
} while ($continuer === 'o');