<?php

// Exercice 2


function calculer($premierChiffre, $deuxiemeChiffre, $operation) {
    if ($operation == "+") {
        return $premierChiffre + $deuxiemeChiffre;
    } elseif ($operation == "-") {
        return $premierChiffre - $deuxiemeChiffre;
    } elseif ($operation == "*") {
        return $premierChiffre * $deuxiemeChiffre;
    } elseif ($operation == "/") {
        return $premierChiffre / $deuxiemeChiffre;
    }
}

function nbrOk($nbr) {
    do {
        $input = readline($nbr);
        if (!is_numeric($input)) {
            echo "Veuillez entrer un nombre.\n";
        }
    } while (!is_numeric($input));
    return $input;
}
