```php
<?php

// $facture = array("janvier" => 500,
//     "Fevrier" => 620,
//     "Mars"=> 300,
//     "Avril"=> 130,
//     "Mai"=> 560,
//     "Juin"=> 350,
// );

// $factureSixMois = 0;
// foreach ($facture as $key => $value) {
//     echo"Facture du mois de $key : $value € \n";
//     $factureSixMois += $value;
// }


// echo "Facture total de six mois : $factureSixMois € ";




//1°) Soit le tableau associatif suivant : 
    //     $chomage = array(‘Autriche' =>4.9, 'Allemagne' =>9.3 ,'Danemark' =>4.8 , ' Espagne' =>9.4 , 'France' =>9.7);
    // $chomage = array(
    //     "Autriche" => 4.9, 
    //     "Allemagne" => 9.3,
    //     "Danemark" => 4.8, 
    //     "Espagne" => 9.4, 
    //     "France" => 9.7
    // );
    
    // $paysMinChomage = '';
    // $tauxMinChomage = PHP_FLOAT_MAX;
    
// 1. A l'aide de la boucle foreach afficher tous les pays et le taux de chômage correspondant
// foreach ($chomage as $key => $value) {
//     echo "$key a un taux de chamage de $value \n";  
// }
// // 2. A l'aide d'une boucle, écrire les instructions en PHP permettant de parcourir le tableau et d’afficher le nom des pays européens ayant moins de 5 % de chômage.
// foreach ($chomage as $key => $value) {
//     if ($value < 5) {
//         echo "$key est l'un des pays ayant moins de 5% de chômage\n";
//     }
// }
// 3. Afficher le nom du pays ayant le taux de chômage le plus faible
// foreach ($chomage as $key => $value) {
//     if ($value < $tauxMinChomage) {
//         $tauxMinChomage = $value;
//         $paysMinChomage = $key;
//     }
// }

// echo "Le pays avec le taux de chômage le plus faible est => $paysMinChomage\n";












// // Compléter le tableau suivant avec quelques noms et quelques notes : 
// // $tabNotes = array(['boucher'] =>16, ['bourdette'] =>13 .........à compléter
// $tabNotes = array(
//     'sarah' => 15,
//     'marvin' => 20,
//     'mathias' => 4,
//     'axel' => 6,
//     'Ethan' => 18,
//     'celine' => 13,
//     'thomas'=> 8
// );

// // 1. A l'aide d'une boucle afficher le nom de chaque élève et la note correspondante
// foreach ($tabNotes as $nom => $note) {
//     echo "Nom : $nom, \nNote : $note,\n ==========\n";
// }

// $somme = 0;
// $moyenneNotes = count($tabNotes);

// // 2. Afficher la moyenne des notes
// foreach ($tabNotes as $note) {
//     $somme += $note;
// }

// $moyenne = $somme / $moyenneNotes;

// echo "Moyenne des notes : " . $moyenne;






function afficherNotes($tabNotes)
{
    echo "==============================\n";
    echo "   Notes de chaque élèves :   \n";
    echo "==============================\n";
    foreach ($tabNotes as $eleve => $notes) {
        echo "Notes de " . $eleve . " : \n";
        foreach ($notes as $note) {
            echo "\t- " . $note . "/20\n";
        }
    }
    echo PHP_EOL;
}

// 2. Afficher le nom et la moyenne de chaque élève
function afficherMoyenneEleves($tabNotes)
{
    echo "==============================\n";
    echo "  Moyenne de chaque élèves :  \n";
    echo "==============================\n";
    foreach ($tabNotes as $eleve => $notes) {
        $average = array_sum($notes) / count($notes);
        echo $eleve . " : " . number_format($average, 2, ",") . "\n";
    }
}

//  3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier (attention vous devez vérifier que cet élève est bien présent dans le tableau)
function afficherNoteEleveChoisi($tabNotes)
{

    // Vérification que le nom saisi existe dans le tableau
    $nomEleve = "";
    while (!array_key_exists($nomEleve, $tabNotes)) {
        // Affichage de tous les élèves présent dans le tableau
        echo "Elèves présent : " . implode(", ", array_keys($tabNotes)) . "\n";

        $nomEleve = readline("Veuillez entrer le nom de l'élève dont vous voulez voir les notes : ");
    }

    echo "==============================\n";
    echo "          {$nomEleve} :       \n";
    echo "==============================\n";

    $notesEleve = $tabNotes[$nomEleve];
    echo "Notes : \n";
    foreach ($notesEleve as $note) {
        echo "\t{$note}/20 \n";
    }
    echo "Moyenne de {$nomEleve} : \n" . "\t" . number_format(array_sum($notesEleve) / count($notesEleve), 2, ",");
}



$tabNotes = array(
    "prenot" => [2, 10, 14],
    "perthuis" => [10, 18, 12],
    "paria" => [17, 16, 15],
    "pethro" => [0, 5, 9],
    "perditio" => [12, 11, 14],
);


$continue = "y";
//  4. Faire un menu pour afficher les questions 1,2,3
while ($continue == "y" || $continue == "Q") {

    $choice = 0;
    while ($choice < 1 || $choice > 3) {
        echo "Que voulez-vous faire : \n"
            . "\t1 - Afficher le nom et les notes de chaque élève\n"
            . "\t2 - Afficher le nom et la moyenne de chaque élève\n"
            . "\t3 - Afficher le nom et la moyenne d'un seul élève\n";

        $choice = readline("Votre choix : ");
        echo PHP_EOL;
    }

    switch ($choice) {
        case 1:
            afficherNotes($tabNotes);
            break;
        case 2:
            afficherMoyenneEleves($tabNotes);
            break;
        case 3:
            afficherNoteEleveChoisi($tabNotes);
            break;
        default:
            echo "ERROR: le choix n'est pas valide";
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $continue = readline("Vous voulez faire une autre demande ? (y/N)");
}


```