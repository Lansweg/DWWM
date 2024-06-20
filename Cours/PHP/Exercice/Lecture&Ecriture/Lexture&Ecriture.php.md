```php
<?php
//? EXERCICES 2 : Lecture et écriture

//! 2.1
//? Ecrire un programme qui demande un nbr à l’utilisateur, puis qui calcule et affiche le carré de ce nbr.
// $prog1 = readline("Saisir un nbr". " ");
// // $prog1 = sqrt($prog1);
// $prog1 = $prog1 * $prog1;
// echo $prog1;
// echo "\n";

//! 2.2
//? Ecrire un programme qui demande son prénom à l'utilisateur, et qui lui réponde par un charmant « Bonjour » suivi du prénom.
// $prog2 = readline("Saisie ton prénom" . " ");
// echo "Bonjour" . " " . $prog2;
// echo "\n";

//! 2.3
//? Ecrire un programme qui lit le prix HT d’un article, le nbr d’articles et le taux de TVA, et qui
//? fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.
// $prixHT = readline("Saisie le prix : ");
// $nbrArticles = 5; // nbr d'articles
// $TVA = $prixHT * 20 / 100; // Taux de TVA en pourcentage
// $HorsTaxe = $prixHT * $nbrArticles;
// $PrixTTC = $HorsTaxe + $TVA;

// echo "\n";
// echo "\n";
// echo "Ticket de caisse";
// echo "\n";
// echo "\n";
// echo "Total Article =" . " " . $nbrArticles;
// echo "\n";
// echo "Prix HT =" . " " . $HorsTaxe."€";
// echo "\n";
// echo "TVA =" . " " . $TVA."€";
// echo "\n";
// echo "Prix TTC =" . " " . $PrixTTC ."€";

//! 3.1
//? Ecrire un algorithme qui demande un nbr à l’utilisateur, et l’informe ensuite si ce nbr est positif ou négatif 
//? (on laisse de côté le cas où le nbr vaut zéro).

// $nbr = readline("Entrez un nbr : ");
// if ($nbr > 0) {
//     echo "Positif.\n";
// } elseif ($nbr < 0) {
//     echo "Négatif.\n";
// } else{
//     echo "NULL";
// }

//! 3.2
//? Ecrire un algorithme qui demande deux nbrs à l’utilisateur et l’informe ensuite si leur
//? produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention
//? toutefois : on ne doit pas calculer le produit des deux nbrs.

// $nbr1 = readline("Indique le nbr 1 : ");
// $nbr2 = readline("Indique le nbr 2 : ");

// if ($nbr1 > 0 && $nbr2 > 0) {
//     echo "Positif.\n";
// } elseif ($nbr1 < 0 && $nbr2 < 0) {
//     echo "Positif.\n";
// } else {
//     echo "Négatif.\n";
// }


//! 3.3
//?  Ecrire un algorithme qui demande un nbr à l’utilisateur, et l’informe ensuite si ce
//? nbr est positif ou négatif (on inclut cette fois le traitement du cas où le nbr vaut zéro).

// $nbr = readline("Entrez un nbr : ");
// if ($nbr > 0) {
//     echo "Positif.\n";
// } elseif ($nbr < 0) {
//     echo "Négatif.\n";
// } else {
//     echo "Zéro.\n";
// }


//! 3.4
//? Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si le
//? produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être
//? nul). Attention toutefois, on ne doit pas calculer le produit !


// $nbre1 = readline("Sélctionnez votre 1er nombre : ");
// $nbre2 = readline("Sélctionnez votre 2ème nombre : ");


// if ($nbre1 == 0  $nbre2  == 0) {
//     echo "Le produit est nul.";
// } else {

//     if (($nbre1 < 0 && $nbre2  > 0)  ($nbre1 > 0 && $nbre2  < 0)) {
//         echo "Le produit est négatif.";
//     } else {
//         echo "Le produit est positif.";
//     }
// }



//! 3.5
//? Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de
//? sa catégorie :

// $age = readline("ton age ? ");
// if ($age > 12) {
//     echo "Cadet";
// } else if ($age < 11) {
//     echo"Minime";
// } else if ($age < 9) {
//     echo "Pupille";
// } else if ($age < 7) {
//     echo "Poussin";
// } 


//! 3.6
//? Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !
//? Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par
//? exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :
//? "Dans une minute, il sera 21 heures(s) 33".
//? NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier



//! 3.7
//? De même que le précédent, cet algorithme doit demander une heure et en afficher une
//? autre. Mais cette fois, il doit gérer également les secondes, et afficher l'heure qu'il sera une
//? seconde plus tard.
//? Par exemple, si l'utilisateur tape 21, puis 32, puis 8, l'algorithme doit répondre : "Dans une
//? seconde, il sera 21 heures(s), 32 minutes(s) et 9 seconde(s)".
//? NB : là encore, on suppose que l'utilisateur entre une date valide.


//! 3.8
//? Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les vingt
//? suivantes et 0,08 E au-delà. Ecrivez un algorithme qui demande à l’utilisateur le nombre de
//? photocopies effectuées et qui affiche la facture correspondante.
//? $nombre_de_photocopies = intval(readline("Entrez le nombre de photocopies effectuées : "));








//! 3.9
//? Les habitants d’une ville paient l’impôt selon les règles suivantes :
//? • Les hommes de plus de 20 ans paient l’impôt
//? • Les femmes paient l’impôt si elles ont entre 18 et 35 ans
//? • Les autres ne paient pas d’impôt
//? Le programme demandera donc l’âge et le sexe, et se prononcera donc ensuite sur le fait que
//? l’habitant est imposable.

// $age = intval(readline("Entrez votre âge : "));
// $sexe = readline("Entrez votre sexe (H pour homme, F pour femme) : ");
// if (($sexe == "H" && $age > 20) || ($sexe == "F" && $age >= 18 && $age <= 35)) {
//     echo "Vous êtes imposable.";
// } else {
//     echo "Vous n'êtes pas imposable.";
// }


//! 3.10
//? Ecrivez un algorithme qui après avoir demandé un numéro de jour, de mois et d'année à
//? l'utilisateur, renvoie s'il s'agit d’une année bissextile.

// $num = intval("Indique un mois de l'année : ");
// $annee = intval("Indique une année : ");
// if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
//     echo "biseptil";
// } else {
//     echo "biseptique";
// }
```