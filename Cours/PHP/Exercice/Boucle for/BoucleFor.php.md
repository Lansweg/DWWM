```php
<?php

//! EXO 1
//! Écrire un algorithme permettant de générer un chiffre entre 1 et 9 de manière aléatoire
//! Afficher la table de multiplication du nombre aléatoire généré en respectant le formatage attendu

// $Multi = rand(1, 10);
// echo "multiplication de $Multi est :\n";
// for ($i = 1; $i <= 10; $i++) {
//     echo $Multi  . "x" .  $i . "=" . ($Multi * $i) . "\n";
// }


//! EXO 2 
//! Écrire un algorithme qui demande à l’utilisateur de saisir un nombre entier affiche ensuite les 5
//! nombre précédents et suivants.

// $userInt = readline("saisie un nombre : ");
// echo "\nLe nombre choise estt : " . $userInt . "\n";

// for ($i = $userInt - 5; $i < $userInt; $i++) {
//     echo $i . "\n";
// }

// echo "********************** \n";

// for ($i = $userInt + 1; $i <= $userInt + 5; $i++) {
//     echo $i . "\n";
// }


//! EXO 3
//! Écrire un programme qui demande un nombre à l’utilisateur et calcul sa factorielle
//! La factorielle de 8, notée 8 ! vaut : 1 * 2* 3 * 4 * 5 * 6 * 7 * 8 = 40320

// $num = readline("");  
// $fac = 1;  
// for ($i=$num; $i>=1; $i--)   
// {  
//   $fac = $fac * $i;  
  
// }  
// echo "fac of $num is $fac";  

//? ==========================

// $num = readline("nombre : ");   
// $fac = 1;
// for ( $i = 1 ; $i <= $num ; $i++ ) {  
//     $fac = $i * $fac;
// }  
// echo $fac;  


//! EXO 4
//! Écrire un programme qui permet de saisir 5 nombres entiers et d’afficher le plus grand nombre à
//! la fin et le plus petit

$highNombre= readline("Entrez un nombre : ");
    $lowNombre = $highNombre;

    for($i=0; $i<4 ; $i++){
        $nombre = readline("Entrez un nombre : ");
        if($nombre > $highNombre){
            $highNombre = $nombre;
        }elseif($nombre < $lowNombre){
            $lowNombre = $nombre;
        }
    }

    echo "Nombre le plus grand : $highNombre\n";
    echo "Nombre le plus petit : $lowNombre";


```

