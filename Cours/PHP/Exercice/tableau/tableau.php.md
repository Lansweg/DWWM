```

<?php

// $tab = [12,14,15,18,10];
// for ($i = 0; $i < count($tab); $i++) {
//     echo"". $tab[$i] ."\n";
// }

// $prenoms = ["Pierre","Paul","Jacques"];
// for ($i = 0; $i < count($prenoms); $i++) {
//     echo $i . ":". $prenoms[$i] ."\n";
// }


// 1
// $notes = array();


// for ($i = 0; $i < 9; $i++) {

//     do {
//         $note = readline("Entrez la note " . ($i + 1) . " (entre 0 et 20) : ");
//     } while (!is_numeric($note) || $note < 0 || $note > 20);

//     $notes[] = $note;
// }

// $moyenne = array_sum($notes) / count($notes);

// echo "La moyenne des notes est : " . number_format($moyenne, 2) . "\n";








// EXO 2

// $nombreValeurs = readline("Combien de valeurs allez-vous saisir ? ");

// $valeurs = [];
// $compteurPositifs = 0;
// $compteurNegatifs = 0;


// for ($i = 0; $i < $nombreValeurs; $i++) {
//     $valeur = readline("Entrez la valeur ");
//     $valeurs[] = $valeur;
// }

// foreach ($valeurs as $valeur) {
//     if ($valeur >= 0) {
//         $compteurPositifs++;
//     } else {
//         $compteurNegatifs++;
//     }
// }

// echo "Nombre de valeurs positives: " . $compteurPositifs . "\n";
// echo "Nombre de valeurs négatives: " . $compteurNegatifs . "\n";




// EXO 3 


// $tab = array(1, 8, 3, 4, 5);
// $somme = 0;

// foreach ($tab as $valeur) {
//     $somme += $valeur;
// }

// echo "La somme est : " . $somme;

// OU 

// $tab = [1, 8, 3, 4, 5];
// $total = 0;

// for ($i = 0; $i < count($tab); $i++) { 
//      $total += $tab[$i];
// }

// echo "Total : " . $total;











// EXO 4 

// $tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
// $tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);


// $newTab = array();

// for ($i = 0; $i < count($tab1); $i++) {
//     echo "tab 1 = " . implode(" ", $tab1);
//     $newTab[] = $tab1[$i] + $tab2[$i];
// }


// echo "\/ Tableau à constituer \/ \n" . implode(" ", $newTab);




















// EXO 5 


// $nombreDeValeurs = readline("Saisie combien tu veux de valeur ? ");

// $tab = [];

// for ($i = 0; $i < $nombreDeValeurs; $i++) {
//     $valeur = readline("Saisie une valeur") . ($i + 1) . ": ";
//     $tab[] = $valeur;
// }

// $upValeur = $tab[0];
// $position = 0;

// for ($i = 1; $i < count($tab); $i++) {
//     if ($tab[$i] > $upValeur) {
//         $upValeur = $tab[$i];
//         $position = $i;
//     }
// }

// echo "La plus grande valeur est " . $upValeur . " à la position " . ($position + 1) . ".\n";


// EXO 6


// echo "Combien de notes voulez-vous saisir ? ";
// $nbrDeNotes = (int)readline();
// $notes = array();

// for ($i = 0; $i < $nbrDeNotes; $i++) {
//     echo "Veuillez saisir la note " . ($i + 1) . ": ";
//     $note = (float)readline(); 
//     $notes[] = $note;
// }


// $sommeDesNotes = array_sum($notes);
// $moyenne = $sommeDesNotes / $nbrDeNotes; // on calcule la moyenne des notes


// $nbrSuperieures = 0;
// foreach ($notes as $note) {
//     if ($note > $moyenne) {
//         $nbrSuperieures++; // renvoie le nombre de note supperieur
//     }
// }

// echo "Moyenne general: " . $moyenne . "\n";
// echo "Note supperieur a la moyenne general : " . $nbrSuperieures . "\n";


// EXO 7 

// $tabPrix = array(5, 50, 23, 11);
// $tabQuantiter = array(10, 1, 4, 3);

// $newTab = 0;

// for ($i = 0; $i < count($tabPrix); $i++) {
//     $newTab += $tabPrix[$i] * $tabQuantiter[$i];

// }


// echo "\/ Total des prix \/ \n" . $newTab . "\n";
```