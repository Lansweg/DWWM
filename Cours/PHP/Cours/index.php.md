
```php
<?php

// $joueur = "Toto";
// $age = 30;

// echo "Nom du joueur :" . " " . $joueur . "\n" . "</br>";
// echo "\n"; // Possibilité de le mettre derrière $joueur;
// echo "Age du joueur :" . " " .  $age . "\n" . "</br>";

// // $age = $age ++;
// $age++;
// echo "Age du joueur :" . " " .  $age;

// // STRING
// $a = "Hello world  ";

// // INT
// $b = 1;

// //FLOAT=DOUBLE
// $c = 3.14;

// //BOOLEAN
// $d = true;

// echo $a . "\n";
// echo $b . "\n";
// echo $c . "\n";
// echo $d . "\n";

// echo gettype($d) . "\n";



// define('MACONST','Hello');
// echo MACONST;

// const PI = 3.14;

// if(true){
//     define("MACONST","Hello");
// } else {
//     define("MACONST","Hello World");
// }


// $saisie = readline("Saisir un nombre");
// echo $saisie;
// $saisie =$saisie +5;
// echo $saisie;


// $age = 10;

// if ($age === 10) { 
//     echo "Tu est mineur !";
// } else {
//     echo "Tu est majeur !";
// }


// $nbre = readline("ton age ? ");
// if ($nbre > 50) {
//     echo "Supérieur à 50";
// } else if ($nbre > 20) {
//     echo"Supérieur à 20";
// } else if ($nbre >= 5) {
//     echo "Supérieur à 5";
// } else {
//     echo "Inférieur à 5";
// }

// echo"*************************\n";

// if($nbre > 50):
//     echo "Supérieur à 50";
// elseif ($nbre > 20):
//     echo"Supérieur à 20";
// elseif ($nbre >= 5):
//     echo "Supérieur à 5";
// else:
//     echo "Inférieur à 5";
// endif;


// $prenom = "Jean";

// switch ($prenom) {
//     case "Jean":    
//         echo"Bonjour Jean";
//         break;
//     case "Perrier":    
//         echo"Bonjour Pierre";
//         break;
//     case "Paul":    
//         echo"Bonjour Paul";
//         break;
//     default:
//     echo "Pas de nom";
//     break;
// }


// ----------------------------------------------------


// switch ($prenom):
//     case "Jean":    
//         echo"Bonjour Jean";
//         break;
//     case "Perrier":    
//         echo"Bonjour Pierre";
//         break;
//     case "Paul":    
//         echo"Bonjour Paul";
//         break;
//     default:
//         echo "Pas de nom";
// endswitch;


// $prenom = "Jean";

// $resultat = match($prenom) {
//     "Jean" => "Bonjour Jean",
//     "Paul"  => "Bonjour Paul",    
//     default => "Qui êtes vous ?"
// };

// echo $resultat;


$age = 10;
$isAllowed;
if($age > 10 ) {
    $isAllowed = true;
} else{
    $isAllowed = false;
}

$isAllowed = $age > 10 ? true : false;



// FUSION NULL

$a = null;
$b = "hello";
$c;

if($a){
    $c = $a;
}elseif($b){
    $c = $b;
}else {
    $c = "Inconue";
}

//?  On peut le noter aussi comme ci dessous : 

//! $c = $a ?? $b ?? "Inconue";


echo $c;




```