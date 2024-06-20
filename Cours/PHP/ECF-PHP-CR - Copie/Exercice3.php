<?php

require 'fonction.php';

$notes = [];

$notes = [];

do {
    ajouterNote();
    $continuer = readline("Voulez-vous ajouter une autre note ? (o/n) : ");
} while ($continuer === 'o');





do {
    echo "\n1. Ajouter une note\n";
    echo "2. Supprimer un élève\n";
    echo "3. Calculer la moyenne de la classe\n";
    echo "4. Afficher les élèves au-dessus de la moyenne générale\n";
    echo "5. Trouver la note la plus élevée et la note la plus basse\n";
    echo "6. Trier et afficher le tableau des notes\n";
    echo "7. Afficher le tableau des notes \n";
    echo "8. Quitter\n";
    $choix = intval(readline("Choisissez une option : "));
    switch ($choix) {
        case 1:
            do {
                ajouterNote();
                $continuer = readline("Voulez-vous ajouter une autre note ? (o/n) : ");
            } while ($continuer === 'o');
            break;
        case 2:
            supprimerEleve();
            break;
        case 3:
            echo "Moyenne de la classe : " . calculerMoyenne() . "\n";
            break;
        case 4:
            afficherElevesAuDessusMoyenne();
            break;
        case 5: 
            plusouMoins();
            break;
        case 6:
            $ordre = readline("Trier par ordre (asc/desc) : ");
            trierNotes($ordre);
            break;
        case 7:
            afficherNotes();
            break;
        case 8:
            echo "Déconnexion du serveur des notes... !\n";
            system('cls');
            break;
        default:

            echo "Option invalide.\n";
    }
} while ($choix != 8);


