<?php

class Employe {
    protected $nom;
    protected $salaire;

    public function __construct($nom, $salaire){
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function afficherDetails(){
        echo "Nom de l'employé : " . $this->nom . "<br>";
        echo "Salaire de l'employé : " . $this->salaire . "<br>";
    }
}
?>