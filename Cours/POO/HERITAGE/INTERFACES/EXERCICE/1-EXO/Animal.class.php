<?php

require_once 'iMethode.php';

class Lapin implements iAnimals {
    public $nom;
    public $pattes;
    public $enVie;

    public function __construct($nom, $pattes) {
        $this->nom = $nom;
        $this->pattes = $pattes;
        $this->enVie = true;
        echo "Le lapin $nom à $pattes pattes a été créé <br>";
    }

    public function seNourrir() {
        echo "Le lapin $this->nom se nourrit <br>";
    }

    public function crier() {

        $crie = [
            "Le lapin glapit de peur <br>",
            "Le lapin pousse un cri strident <br>",
            "Le lapin émet un son de détresse <br>",
            "Le lapin hurle de terreur <br>",
            "Le lapin crie en panique <br>"
        ];
        $cri_aleatoire = $crie[array_rand($crie)];
        echo $cri_aleatoire;
    }

    public function fuir() {
        $this->seDeplacer();
        $fuir = [
            "Le lapin $this->nom s’enfuit sur ses $this->pattes pattes sous les jambe du chasseur ! <br>",
            "Le lapin $this->nom s’enfuit sur ses $this->pattes pattes et ce cache sous une feuille ! <br>",
            "Le lapin $this->nom s’enfuit sur ses $this->pattes pattes d’un seul bond ! <br>"
        ];
        $fuir_aleatoire = $fuir[array_rand($fuir)];
        echo $fuir_aleatoire;
    }

    public function seDeplacer() {
        // Logique de déplacement
    }
}
?>