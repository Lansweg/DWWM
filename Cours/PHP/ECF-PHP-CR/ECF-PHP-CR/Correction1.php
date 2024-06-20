<?php
// Correction EXO 1
echo "\t**********************\n";
echo "\tCALCUL SUR LE CERCLE\n";
echo "\t**********************\n";
do{
    do{
        $rayon = readline("Entrez le rayon pour le calcul: ");
    }while(!verifierSaisie($rayon));
    
    $result = calculerCercle($rayon);
    echo "La circonférence du cercle est :" . $result['circonference'] . " \nLa surface du cercle est : ". $result["surface"]."\n";
    
    do{
        $reponse = strtolower(readline("Voulez-vous effectuer un autre calcul ? (o/n): "));
        if($reponse !== 'o' && $reponse !== 'n'){
            echo "Réponse non valide, veuillez réessayer.\n";
        }
    }while($reponse !== 'o' && $reponse !== 'n');
}while($reponse === 'o');



// Function 

function verifierSaisie($valeur){
    if(!is_numeric($valeur) || $valeur <= 0){
        echo "Veuillez entrer un nombre.\n";
        return false;
    }
    return true;
}

function calculerCercle($rayon){

    $circonference = 2 * M_PI * $rayon;
    $surface = M_PI * pow($rayon, 2);
    return [
        'circonference' => round($circonference, 2),
        'surface' => round($surface, 2)
    ];
}



