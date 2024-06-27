<?php


class Rectangle
{
    protected $longueur;
    protected $largeur;
    public function __construct($longueur, $largeur){$this->longueur = $longueur; $this->largeur = $largeur;}
    // GETTER et SETTER
    public function getlongueur(){return $this->longueur;}
    public function getlargeur(){return $this->largeur;}
    public function setlongueur($longueur){$this->longueur = $longueur;}
    public function setlargeur($largeur){$this->largeur = $largeur;}


    public function periRect(){
        $Perimetre = ($this->largeur*2) + ($this->longueur*2);
    return $Perimetre;
    }
    public function aireRect(){
        $Air = $this->largeur * $this->longueur;
    return $Air;
    }
    public function estCarreRect(){
            if ($this->longueur == $this->largeur){
                echo "c'est un caré";
                return;
            }
            echo "** c'est pas un caré ";
    }
    public function afficherRect(){
        echo "<br>"; 
        echo "*********************************************<br>"; 
        echo "** la longueur est $this->longueur<br>"; 
        echo "** la largeur est $this->largeur<br>"; 
        echo ""; 
        echo "** parimetre = {$this->periRect()}<br>"; 
        echo "** air du rectangle = {$this->aireRect()} <br>";

        echo $this->estCarreRect(); 
        echo "<br> **<br>"; 
        echo "*********************************************<br>"; 
    }














}