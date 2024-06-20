<?php

require 'fonction.php';

$user = readline("Entrez votre nom : ");
$scoreJoueur = 0;
$scoreOrdinateur = 0;

echo "------------------------------\n";
echo "\n";
echo "Bonjour $user, bienvenue dans le jeu chifoumi !\n";
echo "\n";
do {

    echo "\n";
echo "------------------------------\n";
    echo "1. Jouer une manche\n";
    echo "2. Quitter\n";
    $choix = intval(readline("Choisissez une option : "));
    switch ($choix) {
        case 1:
            jouerManche($scoreJoueur, $scoreOrdinateur);
            break;
        case 2:
            afficherScores($scoreJoueur, $scoreOrdinateur);
            break;
        default:
            echo "Option invalide. Veuillez choisir 1 ou 2.\n";
    }
} while ($choix != 2);

