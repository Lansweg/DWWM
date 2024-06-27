<?php
class Cercle {
    private $diametre;
    public function __construct($diametre = 0) {
        $this->diametre = $diametre;
    }
    public function getDiametre() {
        return $this->diametre;
    }
    public function setDiametre($diametre) {
        $this->diametre = $diametre;
    }
    public function perimetre() {
        return pi() * $this->diametre;
    }
    public function aire() {
        $rayon = $this->diametre / 2;
        return pi() * pow($rayon, 2);
    }
    public function afficherCercle() {
        echo "Diamètre : " . $this->diametre . " - Périmètre : " . $this->perimetre() . " - Aire : " . $this->aire();
    }
}