<?php

// Exercice 4

$user = readline("Entrez votre nom : ");
$scoreJoueur = 0;
$scoreOrdinateur = 0;

function jouerManche($scoreJoueur, $scoreOrdinateur) {
    do {
    $options = ["Pierre", "Feuille", "Ciseaux"];

    echo "------------------------------\n";
    echo "\n";
    echo "1. Pierre\n";
    echo "2. Feuille\n";
    echo "3. Ciseaux\n";
    echo "\n";
    echo "------------------------------\n";
    $choixJoueurNum = intval(readline("Choisissez un role: "));
    while ($choixJoueurNum < 1 || $choixJoueurNum > 3) {
        echo "Entrée invalide. Veuillez choisir entre 1, 2 ou 3.\n";
        $choixJoueurNum = intval(readline("Choisissez un role: "));
    }
    $choixJoueur = $options[$choixJoueurNum - 1];
    $choixOrdinateur = $options[array_rand($options)];
    echo "Vous avez choisi $choixJoueur. L'ordinateur a choisi $choixOrdinateur.\n";

    if ($choixJoueur === $choixOrdinateur) {
        echo "Égalité!\n";
    } else {
        if (($choixJoueur === "Pierre" && $choixOrdinateur === "Ciseaux") ||
            ($choixJoueur === "Feuille" && $choixOrdinateur === "Pierre") ||
            ($choixJoueur === "Ciseaux" && $choixOrdinateur === "Feuille")) {
            echo "Vous gagnez cette manche!\n";
            $scoreJoueur++;
        } else {
            echo "L'ordinateur gagne cette manche!\n";
            $scoreOrdinateur++;
        }
    }
    echo "Voulez-vous jouer une autre manche ? (o/n) : ";
    $continuer = readline();
} while ($continuer === 'o');
}




function afficherScores(&$scoreJoueur, &$scoreOrdinateur) {
    echo "Vous avez gagné $scoreJoueur manches.\n";
    echo "L'ordinateur a gagné $scoreOrdinateur manches.\n";
}

