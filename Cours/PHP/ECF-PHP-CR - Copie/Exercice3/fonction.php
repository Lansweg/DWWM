<?php

// Exercice 3


function ajouterNote() {
    global $notes;
    do {
        $nom = readline("Entrez le nom de l'élève : ");
        if (!preg_match("/^[a-zA-Z\s]+$/", $nom)) {
            echo "Veuillez entrer des lettres uniquement pour le nom.\n";
        }
    } while (!preg_match("/^[a-zA-Z\s]+$/", $nom));

    do {
        $inputNote = readline("Entrez la note de l'élève (entre 0 et 20) : ");
        if (!is_numeric($inputNote) || $inputNote < 0 || $inputNote > 20) {
            echo "La note doit être un nombre entre 0 et 20.\n";
        }
    } while (!is_numeric($inputNote) || $inputNote < 0 || $inputNote > 20);
    $note = floatval($inputNote);

    if (!isset($notes[$nom])) {
        $notes[$nom] = [];
    }
    $notes[$nom][] = $note;
}

function supprimerEleve() {
    global $notes;
    do {
        $nom = readline("Entrez le nom de l'éléve à supprimer : ");
        if (!preg_match("/^[a-zA-Z\s]+$/", $nom)) {
            echo "Veuillez entrer des lettres uniquement pour le nom.\n";
        }
    } while (!preg_match("/^[a-zA-Z\s]+$/", $nom));
    unset($notes[$nom]);
    echo "$nom a été supprimer des liste des notes.\n";
}


function calculerMoyenne() {
    global $notes;
    $total = 0;
    $count = 0;
    foreach ($notes as $noteList) {
        foreach ($noteList as $note) {
            $total += $note;
            $count++;
        }
    }
    return $count ? $total / $count : 0;
}

function plusouMoins() {
    global $notes;
    $maxNote = PHP_FLOAT_MIN;

    $minNote = PHP_FLOAT_MAX;
    $eleveMax = '';
    $eleveMin = '';

    foreach ($notes as $nom => $noteList) {
        foreach ($noteList as $note) {
            if ($note > $maxNote) {
                $maxNote = $note;
                $eleveMax = $nom;
            }
            if ($note < $minNote) {
                $minNote = $note;
                $eleveMin = $nom;
            }
        }
    }

    echo "+ $eleveMax avec une note de $maxNote\n";
    echo "- $eleveMin avec une note de $minNote\n";
}




function afficherElevesAuDessusMoyenne() {
    global $notes;
    $moyenne = calculerMoyenne();
    echo "Élèves avec une note au-dessus de la moyenne ($moyenne) :\n";
    foreach ($notes as $nom => $noteList) {
        $moyenneEleve = array_sum($noteList) / count($noteList);
        if ($moyenneEleve >= $moyenne) {
            echo "$nom avec une moyenne de $moyenneEleve/20\n";
        }
    }
}

function trierNotes($ordre = 'asc') {
    global $notes;
    $moyennes = [];
    foreach ($notes as $nom => $noteList) {
        $moyennes[$nom] = array_sum($noteList) / count($noteList);
    }
    if ($ordre === 'asc') {
        asort($moyennes);
    } else {
        arsort($moyennes);
    }
    foreach ($moyennes as $nom => $moyenne) {
        echo "$nom : $moyenne\n";
    }
}
function afficherNotes() {
    global $notes;
    foreach ($notes as $nom => $noteList) {
        echo "$nom : " . implode(', ', $noteList) . "\n";
    }
}

function clear() {
    system('cls');
}


