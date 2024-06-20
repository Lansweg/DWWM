<?php
// 1°) Soit un tableau T à deux dimensions (12, 8) préalablement rempli de valeurs numériques.
// Écrire un algorithme qui recherche la plus grande valeur au sein de ce tableau

// $T = [[1,2,3,4,5,6,7,8],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,8],[1,5,3,2,9,5,8,4],[1,5,3,2,9,5,8,5],[1,5,3,2,9,5,8,7],[1,5,3,2,9,5,8,6],[1,5,3,2,9,5,8,54],[1,5,3,2,9,5,8,13],[1,5,3,2,9,5,8,22],[1,5,3,2,9,5,8,23]];

// $max = [0][0];

// for ($i = 1; $i < count($T); $i++){
//     for ($j = 1; $j < count($T[$i]); $j++)
//     if ($T[$i][$j]> $max){
//         $max = $T[$i][$j];
//     }
// }

// echo "La valeur max du tableau est : $max";


// 2°) Pour chacune des figures suivantes, écrire et commenter votre algorithme 

// $etoile = "*";

// $tab = [];


// for ($i=1; $i <= 7; $i++) { 
// $ligne = str_repeat($etoile, $i);
// array_push($tab, $ligne);
// }

// for ($i= 6 ; $i >= 1 ; $i--) { 
//     $ligne = str_repeat($etoile , $i);
//     array_push($tab, $ligne);
// }

// foreach ($tab as $ligne) {
// echo $ligne , "\n";
// }

// ====figure *=======

// $tab = array();

// for ($i = 1; $i <= 7; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }

// for ($i = 6; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         $tab[$i][$j] = "*"." ";
//         echo $tab[$i][$j];
//     }
//     echo "\n";
// }


// =====Figure X O=====

for ($i = 1; $i <= 8; $i++) {
    if ($i == 8) {
        for ($j = 1; $j <= $i; $j++) {
            echo "X";
        }
    } else {
        echo "X";
        if ($i > 1) {
            for ($j = 1; $j <= $i - 2; $j++) {
                echo "0";
            }
            echo "X";
        }
    }
    echo "\n";
}
// ==============

$tab =[];
$etoile = "X";
$rond = "0" ;

for ($i=0; $i < 8; $i++) { 
    $ligne = str_repeat($etoile, $i);
    
    if ($i < 3 || $i > 6) {
        array_push($tab, $ligne);
    }else{
        $ligne = str_repeat($etoile, 1) . str_repeat($rond, $i - 2) . str_repeat($etoile, 1);
        array_push($tab, $ligne);

    }
}

foreach ($tab as $ligne) {
    echo $ligne , "\n";
}

