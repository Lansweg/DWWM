<?php

//* La boucle while - tantque

//* $i = 5;
//* while( $i < 9) {
//*     echo "coucou \n";
//*     $i++;
//* }




//! EXO 1 
//! Ecrire un algorithme qui demande à l’utilisateur un nombre compris entre 1 et 3 jusqu’à
//! ce que la réponse convienne

// $userInt = 0;
// while ($userInt < 1 || $userInt > 3) {
//     echo "Saisie un nombre entre 1 et 3 : ";
//     $userInt = intval(fgets(STDIN));
    
// }
// echo "Valide ! : $userInt\n";


//! EXO 2
//!  Ecrire un algorithme qui demande un nombre compris entre 10 et 20, jusqu’à ce que la
//! réponse convienne. En cas de réponse supérieure à 20, on fera apparaître un message :
//! « Plus petit ! », et inversement, « Plus grand ! » si le nombre est inférieur à 10.*

// $userInt = 0;
// while ($userInt < 10 || $userInt > 20) {
//     echo "Saisie un nombre entre 1 et 3 : ";
//     $userInt = intval(fgets(STDIN));
//     if ($userInt > 20) {
//         echo "Plus petit !\n";
//     } elseif ($userInt < 10) {
//         echo "plus grand \n";
//     }
// }
// echo "Valide ! : $userInt\n";


//! EXO 3 
//!  Ecrire un algorithme qui demande un nombre de départ, et qui ensuite affiche les dix
//! nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme affichera
//! les nombres de 18 à 27.

// $userInt = readline("Saisie un nombre  : ");
// $userIntAdd = $userInt-1 +10;

// while ($userInt <= $userIntAdd) {
//     $userInt++;
//     echo $userInt . "\n";
// }


//! EXO 4 
//! Vous devez écrire un programme qui calcul le PGCD de 2 nombres.
//! PGCD = Plus Grand Diviseur Commun, s’écrit PGCD (a ; b)
//! Vous devez demander à l’utilisateur deux nombres

//? Calculer le PGCD de 36 et 60 à l'aide de l'algorithme des différences.
//? Principe : si un nombre est un diviseur de 2 nombres a et b, alors il est aussi un diviseur de leur différence a - b
//? --> Commençons par soustraire 36 de 60 :   60 - 36 = 24
//? Donc le PGCD de 60 et 36 est un diviseur de 24. 
//? On continue en utilisant le résultat obtenu et le plus petit des 2 termes de la soustraction :
//? 36 - 24 = 12
//? 24 - 12 = 12
//? 12 - 12 = 0

// $userInt1 = readline("Saisie un premier nombre  : ");
// $userInt2 = readline("Saisie un deuxième nombre : ");
// while ($userInt2 != 0) {
//     $result = $userInt1 % $userInt2;
//     $userInt1 = $userInt2;
//     $userInt2 = $result;
// }
// echo "Result : $userInt1\n";


//? $userInt1 = readline("Saisie un premier nombre : ");: Cette ligne demande à l'utilisateur 
//? de saisir un premier nombre et stocke la valeur saisie dans la variable $userInt1.

//? $userInt2 = readline("Saisie un deuxième nombre : ");: Cette ligne demande à l'utilisateur 
//? de saisir un deuxième nombre et stocke la valeur saisie dans la variable $userInt2.

//? while ($userInt2 != 0) {: Cette ligne commence une boucle while. Tant que $userInt2 n'est 
//? pas égal à zéro, le bloc de code à l'intérieur des accolades sera exécuté.

//? $result = $userInt1 % $userInt2;: Cette ligne calcule le reste de la division de $userInt1 
//? par $userInt2 et stocke le résultat dans la variable $result.

//? $userInt1 = $userInt2;: Cette ligne affecte la valeur de $userInt2 à $userInt1. Cela déplace 
//? essentiellement la valeur de $userInt2 dans $userInt1 pour la prochaine itération de la boucle.

//? $userInt2 = $result;: Cette ligne affecte la valeur de $result à $userInt2. Cela met à jour 
//? la valeur de $userInt2 pour la prochaine itération de la boucle.

//? }: Cette ligne marque la fin du bloc de code de la boucle while.

//? echo "Result : $userInt1\n";: Cette ligne affiche le résultat de l'algorithme, qui est le plus
//? grand diviseur commun des deux nombres saisis par l'utilisateur, car la boucle s'arrête 
//? lorsque $userInt2 est égal à zéro, et à ce moment-là, $userInt1 contient le PGCD (Plus Grand Commun Diviseur).



//!  EXO 5 
//! Vous devez écrire un programme qui demande à l’utilisateur le PPCM de 2 nombres
//! PPCM : Le Plus Petit Multiple Commun, s’écrit PPCM(a,b)



// $userInt1 = readline("Saisie un premier nombre  : ");
// $userInt2 = readline("Saisie un deuxième nombre : ");
// $maxInt = max($userInt1, $userInt2);
// $result = $maxInt;
// while ($result % $userInt1 != 0 || $result % $userInt2 != 0) {
//     $result += $maxInt;
// }
// echo "Result : $result\n";


