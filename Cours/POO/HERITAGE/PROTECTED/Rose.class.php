<?php

require_once "Plante.class.php";

class Rose extends Plante{

    protected $couleur;
    protected $epines;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleur, $epines)
    {
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
        $this->epines = $epines;
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function getEpines(){
        return $this->epines;
    }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setEpines($epines){
        $this->epines = $epines;
    }

    public function afficherRose(){
        $this->afficher();
        echo "Couleur : $this->couleur <br>";
        echo "Epines : $this->epines <br>";
    }
}